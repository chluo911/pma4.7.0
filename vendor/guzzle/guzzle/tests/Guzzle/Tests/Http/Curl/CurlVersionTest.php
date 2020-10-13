<?php

namespace Guzzle\Tests\Http\Curl;

use Guzzle\Http\Curl\CurlVersion;

/**
 * @covers Guzzle\Http\Curl\CurlVersion
 */
class CurlVersionTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testCachesCurlInfo()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testIsSingleton()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
