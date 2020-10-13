<?php

namespace Guzzle\Plugin\Mock;

use Guzzle\Common\Event;
use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Common\AbstractHasDispatcher;
use Guzzle\Http\Exception\CurlException;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\EntityEnclosingRequestInterface;
use Guzzle\Http\Message\Response;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Queues mock responses or exceptions and delivers mock responses or exceptions in a fifo order.
 */
class MockPlugin extends AbstractHasDispatcher implements EventSubscriberInterface, \Countable
{
    /** @var array Array of mock responses / exceptions */
    protected $queue = array();

    /** @var bool Whether or not to remove the plugin when the queue is empty */
    protected $temporary = false;

    /** @var array Array of requests that were mocked */
    protected $received = array();

    /** @var bool Whether or not to consume an entity body when a mock response is served */
    protected $readBodies;

    /**
     * @param array $items      Array of responses or exceptions to queue
     * @param bool  $temporary  Set to TRUE to remove the plugin when the queue is empty
     * @param bool  $readBodies Set to TRUE to consume the entity body when a mock is served
     */
    public function __construct(array $items = null, $temporary = false, $readBodies = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getSubscribedEvents()
    {
        // Use a number lower than the CachePlugin
        return array('request.before_send' => array('onRequestBeforeSend', -999));
    }

    public static function getAllEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a mock response from a file
     *
     * @param string $path File to retrieve a mock response from
     *
     * @return Response
     * @throws InvalidArgumentException if the file is not found
     */
    public static function getMockFile($path)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set whether or not to consume the entity body of a request when a mock
     * response is used
     *
     * @param bool $readBodies Set to true to read and consume entity bodies
     *
     * @return self
     */
    public function readBodies($readBodies)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the number of remaining mock responses
     *
     * @return int
     */
    public function count()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a response to the end of the queue
     *
     * @param string|Response $response Response object or path to response file
     *
     * @return MockPlugin
     * @throws InvalidArgumentException if a string or Response is not passed
     */
    public function addResponse($response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add an exception to the end of the queue
     *
     * @param CurlException $e Exception to throw when the request is executed
     *
     * @return MockPlugin
     */
    public function addException(CurlException $e)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Clear the queue
     *
     * @return MockPlugin
     */
    public function clearQueue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns an array of mock responses remaining in the queue
     *
     * @return array
     */
    public function getQueue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if this is a temporary plugin
     *
     * @return bool
     */
    public function isTemporary()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a response from the front of the list and add it to a request
     *
     * @param RequestInterface $request Request to mock
     *
     * @return self
     * @throws CurlException When request.send is called and an exception is queued
     */
    public function dequeue(RequestInterface $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Clear the array of received requests
     */
    public function flush()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get an array of requests that were mocked by this plugin
     *
     * @return array
     */
    public function getReceivedRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Called when a request is about to be sent
     *
     * @param Event $event
     * @throws \OutOfBoundsException When queue is empty
     */
    public function onRequestBeforeSend(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
