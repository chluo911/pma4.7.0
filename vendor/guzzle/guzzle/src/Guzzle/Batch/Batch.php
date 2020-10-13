<?php

namespace Guzzle\Batch;

use Guzzle\Batch\Exception\BatchTransferException;

/**
 * Default batch implementation used to convert queued items into smaller chunks of batches using a
 * {@see BatchDivisorIterface} and transfers each batch using a {@see BatchTransferInterface}.
 *
 * Any exception encountered during a flush operation will throw a {@see BatchTransferException} object containing the
 * batch that failed. After an exception is encountered, you can flush the batch again to attempt to finish transferring
 * any previously created batches or queued items.
 */
class Batch implements BatchInterface
{
    /** @var \SplQueue Queue of items in the queue */
    protected $queue;

    /** @var array Divided batches to be transferred */
    protected $dividedBatches;

    /** @var BatchTransferInterface */
    protected $transferStrategy;

    /** @var BatchDivisorInterface */
    protected $divisionStrategy;

    /**
     * @param BatchTransferInterface $transferStrategy Strategy used to transfer items
     * @param BatchDivisorInterface  $divisionStrategy Divisor used to create batches
     */
    public function __construct(BatchTransferInterface $transferStrategy, BatchDivisorInterface $divisionStrategy)
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

    public function flush()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function isEmpty()
    {
        return count($this->queue) == 0 && count($this->dividedBatches) == 0;
    }

    /**
     * Create batches for any queued items
     */
    protected function createBatches()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
