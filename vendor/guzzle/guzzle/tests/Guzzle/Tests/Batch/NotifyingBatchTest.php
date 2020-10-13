<?php

namespace Guzzle\Tests\Batch;

use Guzzle\Batch\NotifyingBatch;
use Guzzle\Batch\Batch;

/**
 * @covers Guzzle\Batch\NotifyingBatch
 */
class NotifyingBatchTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testNotifiesAfterFlush()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException Guzzle\Common\Exception\InvalidArgumentException
     */
    public function testEnsuresCallableIsValid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
