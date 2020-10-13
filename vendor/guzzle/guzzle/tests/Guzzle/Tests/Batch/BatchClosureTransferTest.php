<?php

namespace Guzzle\Tests\Batch;

use Guzzle\Batch\BatchClosureTransfer;

/**
 * @covers Guzzle\Batch\BatchClosureTransfer
 */
class BatchClosureTransferTest extends \Guzzle\Tests\GuzzleTestCase
{
    /** @var \Guzzle\Batch\BatchClosureTransfer The transfer fixture */
    protected $transferStrategy;

    /** @var array|null An array for keeping track of items passed into the transfer closure */
    protected $itemsTransferred;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testTransfersBatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testTransferBailsOnEmptyBatch()
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
    public function testEnsuresCallableIsCallable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
