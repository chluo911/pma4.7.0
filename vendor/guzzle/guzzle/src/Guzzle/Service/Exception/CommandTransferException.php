<?php

namespace Guzzle\Service\Exception;

use Guzzle\Http\Exception\MultiTransferException;
use Guzzle\Service\Command\CommandInterface;

/**
 * Exception thrown when transferring commands in parallel
 */
class CommandTransferException extends MultiTransferException
{
    protected $successfulCommands = array();
    protected $failedCommands = array();

    /**
     * Creates a new CommandTransferException from a MultiTransferException
     *
     * @param MultiTransferException $e Exception to base a new exception on
     *
     * @return self
     */
    public static function fromMultiTransferException(MultiTransferException $e)
    {
        $ce = new self($e->getMessage(), $e->getCode(), $e->getPrevious());
        $ce->setSuccessfulRequests($e->getSuccessfulRequests());

        $alreadyAddedExceptions = array();
        foreach ($e->getFailedRequests() as $request) {
            if ($re = $e->getExceptionForFailedRequest($request)) {
                $alreadyAddedExceptions[] = $re;
                $ce->addFailedRequestWithException($request, $re);
            } else {
                $ce->addFailedRequest($request);
            }
        }

        // Add any exceptions that did not map to a request
        if (count($alreadyAddedExceptions) < count($e)) {
            foreach ($e as $ex) {
                if (!in_array($ex, $alreadyAddedExceptions)) {
                    $ce->add($ex);
                }
            }
        }

        return $ce;
    }

    /**
     * Get all of the commands in the transfer
     *
     * @return array
     */
    public function getAllCommands()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add to the array of successful commands
     *
     * @param CommandInterface $command Successful command
     *
     * @return self
     */
    public function addSuccessfulCommand(CommandInterface $command)
    {
        $this->successfulCommands[] = $command;

        return $this;
    }

    /**
     * Add to the array of failed commands
     *
     * @param CommandInterface $command Failed command
     *
     * @return self
     */
    public function addFailedCommand(CommandInterface $command)
    {
        $this->failedCommands[] = $command;

        return $this;
    }

    /**
     * Get an array of successful commands
     *
     * @return array
     */
    public function getSuccessfulCommands()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get an array of failed commands
     *
     * @return array
     */
    public function getFailedCommands()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the Exception that caused the given $command to fail
     *
     * @param CommandInterface $command Failed command
     *
     * @return \Exception|null
     */
    public function getExceptionForFailedCommand(CommandInterface $command)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
