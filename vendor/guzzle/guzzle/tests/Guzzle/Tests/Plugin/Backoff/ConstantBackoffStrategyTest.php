<?php

namespace Guzzle\Tests\Plugin\Backoff;

use Guzzle\Plugin\Backoff\ConstantBackoffStrategy;

/**
 * @covers Guzzle\Plugin\Backoff\ConstantBackoffStrategy
 */
class ConstantBackoffStrategyTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testRetriesWithConstantDelay()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
