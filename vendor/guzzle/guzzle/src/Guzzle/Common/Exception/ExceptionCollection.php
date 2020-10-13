<?php

namespace Guzzle\Common\Exception;

/**
 * Collection of exceptions
 */
class ExceptionCollection extends \Exception implements GuzzleException, \IteratorAggregate, \Countable
{
    /** @var array Array of Exceptions */
    protected $exceptions = array();

    /** @var string Succinct exception message not including sub-exceptions */
    private $shortMessage;

    public function __construct($message = '', $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->shortMessage = $message;
    }

    /**
     * Set all of the exceptions
     *
     * @param array $exceptions Array of exceptions
     *
     * @return self
     */
    public function setExceptions(array $exceptions)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add exceptions to the collection
     *
     * @param ExceptionCollection|\Exception $e Exception to add
     *
     * @return ExceptionCollection;
     */
    public function add($e)
    {
        $this->exceptions[] = $e;
        if ($this->message) {
            $this->message .= "\n";
        }

        $this->message .= $this->getExceptionMessage($e, 0);

        return $this;
    }

    /**
     * Get the total number of request exceptions
     *
     * @return int
     */
    public function count()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Allows array-like iteration over the request exceptions
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the first exception in the collection
     *
     * @return \Exception
     */
    public function getFirst()
    {
        return $this->exceptions ? $this->exceptions[0] : null;
    }

    private function getExceptionMessage(\Exception $e, $depth = 0)
    {
        static $sp = '    ';
        $prefix = $depth ? str_repeat($sp, $depth) : '';
        $message = "{$prefix}(" . get_class($e) . ') ' . $e->getFile() . ' line ' . $e->getLine() . "\n";

        if ($e instanceof self) {
            if ($e->shortMessage) {
                $message .= "\n{$prefix}{$sp}" . str_replace("\n", "\n{$prefix}{$sp}", $e->shortMessage) . "\n";
            }
            foreach ($e as $ee) {
                $message .= "\n" . $this->getExceptionMessage($ee, $depth + 1);
            }
        } else {
            $message .= "\n{$prefix}{$sp}" . str_replace("\n", "\n{$prefix}{$sp}", $e->getMessage()) . "\n";
            $message .= "\n{$prefix}{$sp}" . str_replace("\n", "\n{$prefix}{$sp}", $e->getTraceAsString()) . "\n";
        }

        return str_replace(getcwd(), '.', $message);
    }
}
