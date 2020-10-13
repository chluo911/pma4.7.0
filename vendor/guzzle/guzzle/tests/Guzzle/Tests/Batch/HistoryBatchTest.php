<?php

namespace Guzzle\Tests\Batch;

use Guzzle\Batch\HistoryBatch;
use Guzzle\Batch\Batch;

/**
 * @covers Guzzle\Batch\HistoryBatch
 */
class HistoryBatchTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testMaintainsHistoryOfItemsAddedToBatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
