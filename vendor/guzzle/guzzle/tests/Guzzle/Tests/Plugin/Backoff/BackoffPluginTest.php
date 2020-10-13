<?php

namespace Guzzle\Tests\Plugin\Backoff;

use Guzzle\Common\Event;
use Guzzle\Http\Exception\CurlException;
use Guzzle\Http\Client;
use Guzzle\Plugin\Backoff\BackoffPlugin;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\EntityEnclosingRequest;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Curl\CurlMulti;
use Guzzle\Http\Curl\CurlMultiInterface;
use Guzzle\Plugin\Backoff\ConstantBackoffStrategy;
use Guzzle\Plugin\Backoff\CurlBackoffStrategy;
use Guzzle\Plugin\Backoff\HttpBackoffStrategy;
use Guzzle\Plugin\Backoff\TruncatedBackoffStrategy;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * @group server
 * @covers Guzzle\Plugin\Backoff\BackoffPlugin
 */
class BackoffPluginTest extends \Guzzle\Tests\GuzzleTestCase implements EventSubscriberInterface
{
    protected $retried;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getSubscribedEvents()
    {
        return array(BackoffPlugin::RETRY_EVENT => 'onRequestRetry');
    }

    public function onRequestRetry(Event $event)
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

    public function testCreatesDefaultExponentialBackoffPlugin()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDoesNotRetryUnlessStrategyReturnsNumber()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUpdatesRequestForRetry()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDoesNothingWhenNotRetryingAndPollingRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testRetriesRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \Guzzle\Http\Exception\ServerErrorResponseException
     */
    public function testFailsOnTruncation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testRetriesRequestsWhenInParallel()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Guzzle\Plugin\Backoff\BackoffPlugin
     * @covers Guzzle\Http\Curl\CurlMulti
     */
    public function testRetriesPooledRequestsUsingDelayAndPollingEvent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSeeksToBeginningOfRequestBodyWhenRetrying()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDoesNotSeekOnRequestsWithNoBodyWhenRetrying()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getMockEvent(RequestInterface $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
