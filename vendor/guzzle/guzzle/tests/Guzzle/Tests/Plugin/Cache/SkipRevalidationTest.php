<?php

namespace Guzzle\Tests\Plugin\Cache;

use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\Response;
use Guzzle\Plugin\Cache\SkipRevalidation;

/**
 * @covers Guzzle\Plugin\Cache\SkipRevalidation
 */
class SkipRevalidationTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testSkipsRequestRevalidation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
