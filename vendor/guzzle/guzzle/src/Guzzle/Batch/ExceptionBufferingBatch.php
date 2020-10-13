<?php

namespace Guzzle\Batch;

use Guzzle\Batch\Exception\BatchTransferException;

/**
 * BatchInterface decorator used to buffer exceptions encountered during a transfer.  The exceptions can then later be
 * processed after a batch flush has completed.
 */
class ExceptionBufferingBatch extends AbstractBatchDecorator
{
    /** @var array Array of BatchTransferException exceptions */
    protected $exceptions = array();

    public function flush()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the buffered exceptions
     *
     * @return array Array of BatchTransferException objects
     */
    public function getExceptions()
    {
        return $this->exceptions;
    }

    /**
     * Clear the buffered exceptions
     */
    public function clearExceptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
