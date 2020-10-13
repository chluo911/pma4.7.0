<?php

namespace Guzzle\Tests\Plugin\Backoff;

use Guzzle\Plugin\Backoff\LinearBackoffStrategy;

/**
 * @covers Guzzle\Plugin\Backoff\LinearBackoffStrategy
 */
class LinearBackoffStrategyTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testRetriesWithLinearDelay()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
