<?php

namespace Guzzle\Tests\Batch;

use Guzzle\Batch\Batch;

/**
 * @covers Guzzle\Batch\AbstractBatchDecorator
 */
class AbstractBatchDecoratorTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testProxiesToWrappedObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
