<?php

namespace Guzzle\Tests\Batch;

use Guzzle\Batch\ExceptionBufferingBatch;
use Guzzle\Batch\Batch;
use Guzzle\Batch\BatchSizeDivisor;

/**
 * @covers Guzzle\Batch\ExceptionBufferingBatch
 */
class ExceptionBufferingBatchTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testFlushesEntireBatchWhileBufferingErroredBatches()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
