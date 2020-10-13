<?php

namespace Guzzle\Tests\Plugin\Backoff;

use Guzzle\Plugin\Backoff\ExponentialBackoffStrategy;

/**
 * @covers Guzzle\Plugin\Backoff\ExponentialBackoffStrategy
 */
class ExponentialBackoffStrategyTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testRetriesWithExponentialDelay()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
