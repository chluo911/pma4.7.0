<?php

namespace Guzzle\Tests\Batch;

use Guzzle\Batch\BatchClosureDivisor;

/**
 * @covers Guzzle\Batch\BatchClosureDivisor
 */
class BatchClosureDivisorTest extends \Guzzle\Tests\GuzzleTestCase
{
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

    public function testDividesBatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
