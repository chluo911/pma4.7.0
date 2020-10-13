<?php

namespace Guzzle\Tests\Plugin\Backoff;

use Guzzle\Plugin\Backoff\HttpBackoffStrategy;
use Guzzle\Http\Message\Response;

/**
 * @covers Guzzle\Plugin\Backoff\HttpBackoffStrategy
 * @covers Guzzle\Plugin\Backoff\AbstractErrorCodeBackoffStrategy
 */
class HttpBackoffStrategyTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testRetriesWhenCodeMatches()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAllowsCustomCodes()
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
