<?php

namespace Guzzle\Tests\Http\Exception;

use Guzzle\Http\Exception\MultiTransferException;
use Guzzle\Http\Curl\CurlHandle;
use Guzzle\Http\Message\Request;

/**
 * @covers Guzzle\Http\Exception\MultiTransferException
 */
class MultiTransferExceptionTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testHasRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanSetRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAssociatesExceptionsWithRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
