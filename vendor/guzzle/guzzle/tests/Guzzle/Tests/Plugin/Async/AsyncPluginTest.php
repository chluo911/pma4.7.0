<?php

namespace Guzzle\Tests\Plugin\Async;

use Guzzle\Plugin\Async\AsyncPlugin;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\RequestFactory;
use Guzzle\Http\Curl\CurlHandle;
use Guzzle\Http\Exception\CurlException;
use Guzzle\Common\Event;
use Guzzle\Http\Client;

/**
 * @covers Guzzle\Plugin\Async\AsyncPlugin
 */
class AsyncPluginTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testSubscribesToEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testEnablesProgressCallbacks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAddsTimesOutAfterSending()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testEnsuresRequestIsSet()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testMasksCurlExceptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testEnsuresIntegration()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
