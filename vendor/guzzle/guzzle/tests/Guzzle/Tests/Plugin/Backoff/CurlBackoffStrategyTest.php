<?php

namespace Guzzle\Tests\Plugin\Backoff;

use Guzzle\Http\Message\Response;
use Guzzle\Plugin\Backoff\CurlBackoffStrategy;
use Guzzle\Http\Exception\CurlException;

/**
 * @covers Guzzle\Plugin\Backoff\CurlBackoffStrategy
 * @covers Guzzle\Plugin\Backoff\AbstractErrorCodeBackoffStrategy
 */
class CurlBackoffStrategyTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testRetriesWithExponentialDelay()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testIgnoresNonErrors()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
