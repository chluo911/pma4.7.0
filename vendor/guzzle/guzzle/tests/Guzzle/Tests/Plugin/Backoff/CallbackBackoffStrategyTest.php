<?php

namespace Guzzle\Tests\Plugin\Backoff;

use Guzzle\Plugin\Backoff\CallbackBackoffStrategy;

/**
 * @covers Guzzle\Plugin\Backoff\CallbackBackoffStrategy
 */
class CallbackBackoffStrategyTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @expectedException Guzzle\Common\Exception\InvalidArgumentException
     */
    public function testEnsuresIsCallable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testRetriesWithCallable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
