<?php

namespace Guzzle\Tests\Http\Exception;

use Guzzle\Http\Message\Response;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Exception\RequestException;
use Guzzle\Http\Exception\BadResponseException;

class ExceptionTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @covers Guzzle\Http\Exception\RequestException
     */
    public function testRequestException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Guzzle\Http\Exception\BadResponseException
     */
    public function testBadResponseException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Guzzle\Http\Exception\BadResponseException::factory
     */
    public function testCreatesGenericErrorExceptionOnError()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Guzzle\Http\Exception\BadResponseException::factory
     */
    public function testCreatesClientErrorExceptionOnClientError()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Guzzle\Http\Exception\BadResponseException::factory
     */
    public function testCreatesServerErrorExceptionOnServerError()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
