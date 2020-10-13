<?php

namespace Guzzle\Tests\Plugin\Cache;

use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\Response;
use Guzzle\Plugin\Cache\DenyRevalidation;

/**
 * @covers Guzzle\Plugin\Cache\DenyRevalidation
 */
class DenyRevalidationTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testDeniesRequestRevalidation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
