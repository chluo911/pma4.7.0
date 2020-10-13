<?php

namespace Guzzle\Batch;

/**
 * BatchInterface decorator used to add automatic flushing of the queue when the size of the queue reaches a threshold.
 */
class FlushingBatch extends AbstractBatchDecorator
{
    /** @var int The threshold for which to automatically flush */
    protected $threshold;

    /** @var int Current number of items known to be in the queue */
    protected $currentTotal = 0;

    /**
     * @param BatchInterface $decoratedBatch  BatchInterface that is being decorated
     * @param int            $threshold       Flush when the number in queue matches the threshold
     */
    public function __construct(BatchInterface $decoratedBatch, $threshold)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the auto-flush threshold
     *
     * @param int $threshold The auto-flush threshold
     *
     * @return FlushingBatch
     */
    public function setThreshold($threshold)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the auto-flush threshold
     *
     * @return int
     */
    public function getThreshold()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function add($item)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
