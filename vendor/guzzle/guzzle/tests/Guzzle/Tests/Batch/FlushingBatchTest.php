<?php

namespace Guzzle\Tests\Batch;

use Guzzle\Batch\FlushingBatch;
use Guzzle\Batch\Batch;

/**
 * @covers Guzzle\Batch\FlushingBatch
 */
class FlushingBatchTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testFlushesWhenSizeMeetsThreshold()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
