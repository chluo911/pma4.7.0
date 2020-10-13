<?php

namespace Guzzle\Tests\Http\Curl;

use Guzzle\Http\Client;
use Guzzle\Http\Message\EntityEnclosingRequest;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Curl\RequestMediator;

/**
 * @covers Guzzle\Http\Curl\RequestMediator
 */
class RequestMediatorTest extends \Guzzle\Tests\GuzzleTestCase
{
    public $events = array();

    public function event($event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testEmitsEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDoesNotUseRequestResponseBodyWhenNotCustom()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
