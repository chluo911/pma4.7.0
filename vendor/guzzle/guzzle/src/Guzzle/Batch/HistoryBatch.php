<?php

namespace Guzzle\Batch;

/**
 * BatchInterface decorator used to keep a history of items that were added to the batch.  You must clear the history
 * manually to remove items from the history.
 */
class HistoryBatch extends AbstractBatchDecorator
{
    /** @var array Items in the history */
    protected $history = array();

    public function add($item)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the batch history
     *
     * @return array
     */
    public function getHistory()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Clear the batch history
     */
    public function clearHistory()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
