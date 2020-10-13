<?php

namespace Guzzle\Tests\Http\Exception;

use Guzzle\Http\Exception\CurlException;
use Guzzle\Http\Curl\CurlHandle;

/**
 * @covers Guzzle\Http\Exception\CurlException
 */
class CurlExceptionTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testStoresCurlError()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
