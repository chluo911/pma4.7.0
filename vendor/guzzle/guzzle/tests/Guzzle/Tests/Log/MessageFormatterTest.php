<?php

namespace Guzzle\Tests\Log;

use Guzzle\Http\Client;
use Guzzle\Http\Curl\CurlHandle;
use Guzzle\Http\Message\EntityEnclosingRequest;
use Guzzle\Http\EntityBody;
use Guzzle\Http\Message\Response;
use Guzzle\Log\MessageFormatter;
use Guzzle\Plugin\Log\LogPlugin;
use Guzzle\Log\ClosureLogAdapter;

/**
 * @covers Guzzle\Log\MessageFormatter
 */
class MessageFormatterTest extends \Guzzle\Tests\GuzzleTestCase
{
    protected $request;
    protected $response;
    protected $handle;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function logProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider logProvider
     */
    public function testFormatsMessages($template, $output)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testFormatsRequestsAndResponses()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAddsTimestamp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUsesResponseWhenNoHandleAndGettingCurlInformation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUsesEmptyStringWhenNoHandleAndNoResponse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testInjectsTotalTime()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
