<?php

namespace Guzzle\Tests\Plugin\Backoff;

use Guzzle\Http\Message\Response;
use Guzzle\Plugin\Backoff\TruncatedBackoffStrategy;
use Guzzle\Plugin\Backoff\HttpBackoffStrategy;
use Guzzle\Plugin\Backoff\ConstantBackoffStrategy;

/**
 * @covers Guzzle\Plugin\Backoff\TruncatedBackoffStrategy
 */
class TruncatedBackoffStrategyTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testRetriesWhenLessThanMax()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
