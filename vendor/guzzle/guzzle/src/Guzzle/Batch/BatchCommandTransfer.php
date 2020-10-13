<?php

namespace Guzzle\Batch;

use Guzzle\Batch\BatchTransferInterface;
use Guzzle\Batch\BatchDivisorInterface;
use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Service\Command\CommandInterface;
use Guzzle\Service\Exception\InconsistentClientTransferException;

/**
 * Efficiently transfers multiple commands in parallel per client
 * This class is to be used with {@see Guzzle\Batch\BatchInterface}
 */
class BatchCommandTransfer implements BatchTransferInterface, BatchDivisorInterface
{
    /** @var int Size of each command batch */
    protected $batchSize;

    /**
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
     * Creates batches by grouping commands by their associated client
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
