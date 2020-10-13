<?php

namespace Guzzle\Batch;

use Guzzle\Batch\BatchTransferInterface;
use Guzzle\Batch\BatchDivisorInterface;
use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Http\Message\RequestInterface;

/**
 * Batch transfer strategy used to efficiently transfer a batch of requests.
 * This class is to be used with {@see Guzzle\Batch\BatchInterface}
 */
class BatchRequestTransfer implements BatchTransferInterface, BatchDivisorInterface
{
    /** @var int Size of each command batch */
    protected $batchSize;

    /**
     * Constructor used to specify how large each batch should be
     *
     * @param int $batchSize Size of each batch
     */
    public function __construct($batchSize = 50)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates batches of requests by grouping requests by their associated curl multi object.
     * {@inheritdoc}
     */
    public function createBatches(\SplQueue $queue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function transfer(array $batch)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
