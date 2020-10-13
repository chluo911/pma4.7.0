<?php

namespace Guzzle\Tests\Plugin\Backoff;

use Guzzle\Common\Event;
use Guzzle\Log\ClosureLogAdapter;
use Guzzle\Http\Curl\CurlHandle;
use Guzzle\Plugin\Backoff\BackoffLogger;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Message\RequestFactory;

/**
 * @covers Guzzle\Plugin\Backoff\BackoffLogger
 */
class BackoffLoggerTest extends \Guzzle\Tests\GuzzleTestCase
{
    public $message;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testHasEventList()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testLogsEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanSetTemplate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array
     */
    protected function getMocks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return CurlHandle
     */
    protected function getMockHandle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
