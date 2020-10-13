<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Debug;

use Psr\Log\LogLevel;
use Psr\Log\LoggerInterface;
use Symfony\Component\Debug\Exception\ContextErrorException;
use Symfony\Component\Debug\Exception\FatalErrorException;
use Symfony\Component\Debug\Exception\FatalThrowableError;
use Symfony\Component\Debug\Exception\OutOfMemoryException;
use Symfony\Component\Debug\Exception\SilencedErrorContext;
use Symfony\Component\Debug\FatalErrorHandler\UndefinedFunctionFatalErrorHandler;
use Symfony\Component\Debug\FatalErrorHandler\UndefinedMethodFatalErrorHandler;
use Symfony\Component\Debug\FatalErrorHandler\ClassNotFoundFatalErrorHandler;
use Symfony\Component\Debug\FatalErrorHandler\FatalErrorHandlerInterface;

/**
 * A generic ErrorHandler for the PHP engine.
 *
 * Provides five bit fields that control how errors are handled:
 * - thrownErrors: errors thrown as \ErrorException
 * - loggedErrors: logged errors, when not @-silenced
 * - scopedErrors: errors thrown or logged with their local context
 * - tracedErrors: errors logged with their stack trace
 * - screamedErrors: never @-silenced errors
 *
 * Each error level can be logged by a dedicated PSR-3 logger object.
 * Screaming only applies to logging.
 * Throwing takes precedence over logging.
 * Uncaught exceptions are logged as E_ERROR.
 * E_DEPRECATED and E_USER_DEPRECATED levels never throw.
 * E_RECOVERABLE_ERROR and E_USER_ERROR levels always throw.
 * Non catchable errors that can be detected at shutdown time are logged when the scream bit field allows so.
 * As errors have a performance cost, repeated errors are all logged, so that the developer
 * can see them and weight them as more important to fix than others of the same level.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 */
class ErrorHandler
{
    private $levels = array(
        E_DEPRECATED => 'Deprecated',
        E_USER_DEPRECATED => 'User Deprecated',
        E_NOTICE => 'Notice',
        E_USER_NOTICE => 'User Notice',
        E_STRICT => 'Runtime Notice',
        E_WARNING => 'Warning',
        E_USER_WARNING => 'User Warning',
        E_COMPILE_WARNING => 'Compile Warning',
        E_CORE_WARNING => 'Core Warning',
        E_USER_ERROR => 'User Error',
        E_RECOVERABLE_ERROR => 'Catchable Fatal Error',
        E_COMPILE_ERROR => 'Compile Error',
        E_PARSE => 'Parse Error',
        E_ERROR => 'Error',
        E_CORE_ERROR => 'Core Error',
    );

    private $loggers = array(
        E_DEPRECATED => array(null, LogLevel::INFO),
        E_USER_DEPRECATED => array(null, LogLevel::INFO),
        E_NOTICE => array(null, LogLevel::WARNING),
        E_USER_NOTICE => array(null, LogLevel::WARNING),
        E_STRICT => array(null, LogLevel::WARNING),
        E_WARNING => array(null, LogLevel::WARNING),
        E_USER_WARNING => array(null, LogLevel::WARNING),
        E_COMPILE_WARNING => array(null, LogLevel::WARNING),
        E_CORE_WARNING => array(null, LogLevel::WARNING),
        E_USER_ERROR => array(null, LogLevel::CRITICAL),
        E_RECOVERABLE_ERROR => array(null, LogLevel::CRITICAL),
        E_COMPILE_ERROR => array(null, LogLevel::CRITICAL),
        E_PARSE => array(null, LogLevel::CRITICAL),
        E_ERROR => array(null, LogLevel::CRITICAL),
        E_CORE_ERROR => array(null, LogLevel::CRITICAL),
    );

    private $thrownErrors = 0x1FFF; // E_ALL - E_DEPRECATED - E_USER_DEPRECATED
    private $scopedErrors = 0x1FFF; // E_ALL - E_DEPRECATED - E_USER_DEPRECATED
    private $tracedErrors = 0x77FB; // E_ALL - E_STRICT - E_PARSE
    private $screamedErrors = 0x55; // E_ERROR + E_CORE_ERROR + E_COMPILE_ERROR + E_PARSE
    private $loggedErrors = 0;
    private $traceReflector;

    private $isRecursive = 0;
    private $isRoot = false;
    private $exceptionHandler;
    private $bootstrappingLogger;

    private static $reservedMemory;
    private static $stackedErrors = array();
    private static $stackedErrorLevels = array();
    private static $toStringException = null;

    /**
     * Registers the error handler.
     *
     * @param self|null $handler The handler to register
     * @param bool      $replace Whether to replace or not any existing handler
     *
     * @return self The registered error handler
     */
    public static function register(self $handler = null, $replace = true)
    {
        if (null === self::$reservedMemory) {
            self::$reservedMemory = str_repeat('x', 10240);
            register_shutdown_function(__CLASS__.'::handleFatalError');
        }

        if ($handlerIsNew = null === $handler) {
            $handler = new static();
        }

        if (null === $prev = set_error_handler(array($handler, 'handleError'))) {
            restore_error_handler();
            // Specifying the error types earlier would expose us to https://bugs.php.net/63206
            set_error_handler(array($handler, 'handleError'), $handler->thrownErrors | $handler->loggedErrors);
            $handler->isRoot = true;
        }

        if ($handlerIsNew && is_array($prev) && $prev[0] instanceof self) {
            $handler = $prev[0];
            $replace = false;
        }
        if ($replace || !$prev) {
            $handler->setExceptionHandler(set_exception_handler(array($handler, 'handleException')));
        } else {
            restore_error_handler();
        }

        $handler->throwAt(E_ALL & $handler->thrownErrors, true);

        return $handler;
    }

    public function __construct(BufferingLogger $bootstrappingLogger = null)
    {
        if ($bootstrappingLogger) {
            $this->bootstrappingLogger = $bootstrappingLogger;
            $this->setDefaultLogger($bootstrappingLogger);
        }
        $this->traceReflector = new \ReflectionProperty('Exception', 'trace');
        $this->traceReflector->setAccessible(true);
    }

    /**
     * Sets a logger to non assigned errors levels.
     *
     * @param LoggerInterface $logger  A PSR-3 logger to put as default for the given levels
     * @param array|int       $levels  An array map of E_* to LogLevel::* or an integer bit field of E_* constants
     * @param bool            $replace Whether to replace or not any existing logger
     */
    public function setDefaultLogger(LoggerInterface $logger, $levels = E_ALL, $replace = false)
    {
        $loggers = array();

        if (is_array($levels)) {
            foreach ($levels as $type => $logLevel) {
                if (empty($this->loggers[$type][0]) || $replace || $this->loggers[$type][0] === $this->bootstrappingLogger) {
                    $loggers[$type] = array($logger, $logLevel);
                }
            }
        } else {
            if (null === $levels) {
                $levels = E_ALL;
            }
            foreach ($this->loggers as $type => $log) {
                if (($type & $levels) && (empty($log[0]) || $replace || $log[0] === $this->bootstrappingLogger)) {
                    $log[0] = $logger;
                    $loggers[$type] = $log;
                }
            }
        }

        $this->setLoggers($loggers);
    }

    /**
     * Sets a logger for each error level.
     *
     * @param array $loggers Error levels to [LoggerInterface|null, LogLevel::*] map
     *
     * @return array The previous map
     *
     * @throws \InvalidArgumentException
     */
    public function setLoggers(array $loggers)
    {
        $prevLogged = $this->loggedErrors;
        $prev = $this->loggers;
        $flush = array();

        foreach ($loggers as $type => $log) {
            if (!isset($prev[$type])) {
                throw new \InvalidArgumentException('Unknown error type: '.$type);
            }
            if (!is_array($log)) {
                $log = array($log);
            } elseif (!array_key_exists(0, $log)) {
                throw new \InvalidArgumentException('No logger provided');
            }
            if (null === $log[0]) {
                $this->loggedErrors &= ~$type;
            } elseif ($log[0] instanceof LoggerInterface) {
                $this->loggedErrors |= $type;
            } else {
                throw new \InvalidArgumentException('Invalid logger provided');
            }
            $this->loggers[$type] = $log + $prev[$type];

            if ($this->bootstrappingLogger && $prev[$type][0] === $this->bootstrappingLogger) {
                $flush[$type] = $type;
            }
        }
        $this->reRegister($prevLogged | $this->thrownErrors);

        if ($flush) {
            foreach ($this->bootstrappingLogger->cleanLogs() as $log) {
                $type = $log[2]['exception'] instanceof \ErrorException ? $log[2]['exception']->getSeverity() : E_ERROR;
                if (!isset($flush[$type])) {
                    $this->bootstrappingLogger->log($log[0], $log[1], $log[2]);
                } elseif ($this->loggers[$type][0]) {
                    $this->loggers[$type][0]->log($this->loggers[$type][1], $log[1], $log[2]);
                }
            }
        }

        return $prev;
    }

    /**
     * Sets a user exception handler.
     *
     * @param callable $handler A handler that will be called on Exception
     *
     * @return callable|null The previous exception handler
     */
    public function setExceptionHandler(callable $handler = null)
    {
        $prev = $this->exceptionHandler;
        $this->exceptionHandler = $handler;

        return $prev;
    }

    /**
     * Sets the PHP error levels that throw an exception when a PHP error occurs.
     *
     * @param int  $levels  A bit field of E_* constants for thrown errors
     * @param bool $replace Replace or amend the previous value
     *
     * @return int The previous value
     */
    public function throwAt($levels, $replace = false)
    {
        $prev = $this->thrownErrors;
        $this->thrownErrors = ($levels | E_RECOVERABLE_ERROR | E_USER_ERROR) & ~E_USER_DEPRECATED & ~E_DEPRECATED;
        if (!$replace) {
            $this->thrownErrors |= $prev;
        }
        $this->reRegister($prev | $this->loggedErrors);

        return $prev;
    }

    /**
     * Sets the PHP error levels for which local variables are preserved.
     *
     * @param int  $levels  A bit field of E_* constants for scoped errors
     * @param bool $replace Replace or amend the previous value
     *
     * @return int The previous value
     */
    public function scopeAt($levels, $replace = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the PHP error levels for which the stack trace is preserved.
     *
     * @param int  $levels  A bit field of E_* constants for traced errors
     * @param bool $replace Replace or amend the previous value
     *
     * @return int The previous value
     */
    public function traceAt($levels, $replace = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the error levels where the @-operator is ignored.
     *
     * @param int  $levels  A bit field of E_* constants for screamed errors
     * @param bool $replace Replace or amend the previous value
     *
     * @return int The previous value
     */
    public function screamAt($levels, $replace = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Re-registers as a PHP error handler if levels changed.
     */
    private function reRegister($prev)
    {
        if ($prev !== $this->thrownErrors | $this->loggedErrors) {
            $handler = set_error_handler('var_dump');
            $handler = is_array($handler) ? $handler[0] : null;
            restore_error_handler();
            if ($handler === $this) {
                restore_error_handler();
                if ($this->isRoot) {
                    set_error_handler(array($this, 'handleError'), $this->thrownErrors | $this->loggedErrors);
                } else {
                    set_error_handler(array($this, 'handleError'));
                }
            }
        }
    }

    /**
     * Handles errors by filtering then logging them according to the configured bit fields.
     *
     * @param int    $type    One of the E_* constants
     * @param string $message
     * @param string $file
     * @param int    $line
     *
     * @return bool Returns false when no handling happens so that the PHP engine can handle the error itself
     *
     * @throws \ErrorException When $this->thrownErrors requests so
     *
     * @internal
     */
    public function handleError($type, $message, $file, $line)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handles an exception by logging then forwarding it to another handler.
     *
     * @param \Exception|\Throwable $exception An exception to handle
     * @param array                 $error     An array as returned by error_get_last()
     *
     * @internal
     */
    public function handleException($exception, array $error = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Shutdown registered function for handling PHP fatal errors.
     *
     * @param array $error An array as returned by error_get_last()
     *
     * @internal
     */
    public static function handleFatalError(array $error = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Configures the error handler for delayed handling.
     * Ensures also that non-catchable fatal errors are never silenced.
     *
     * As shown by http://bugs.php.net/42098 and http://bugs.php.net/60724
     * PHP has a compile stage where it behaves unusually. To workaround it,
     * we plug an error handler that only stacks errors for later.
     *
     * The most important feature of this is to prevent
     * autoloading until unstackErrors() is called.
     */
    public static function stackErrors()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Unstacks stacked errors and forwards to the logger.
     */
    public static function unstackErrors()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the fatal error handlers.
     *
     * Override this method if you want to define more fatal error handlers.
     *
     * @return FatalErrorHandlerInterface[] An array of FatalErrorHandlerInterface
     */
    protected function getFatalErrorHandlers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
