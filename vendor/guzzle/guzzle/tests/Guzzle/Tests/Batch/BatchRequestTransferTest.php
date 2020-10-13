<?php

namespace Guzzle\Tests\Batch;

use Guzzle\Batch\BatchRequestTransfer;
use Guzzle\Http\Client;
use Guzzle\Http\Curl\CurlMulti;

/**
 * @covers Guzzle\Batch\BatchRequestTransfer
 */
class BatchRequestTransferTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testCreatesBatchesBasedOnCurlMultiHandles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \Guzzle\Common\Exception\InvalidArgumentException
     */
    public function testEnsuresAllItemsAreRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testTransfersBatches()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDoesNotTransfersEmptyBatches()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
