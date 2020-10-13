<?php

namespace Guzzle\Tests;

use Guzzle\Common\HasDispatcherInterface;
use Guzzle\Common\Event;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Tests\Http\Message\HeaderComparison;
use Guzzle\Plugin\Mock\MockPlugin;
use Guzzle\Http\Client;
use Guzzle\Service\Builder\ServiceBuilderInterface;
use Guzzle\Service\Builder\ServiceBuilder;
use Guzzle\Tests\Mock\MockObserver;
use Guzzle\Tests\Http\Server;
use RuntimeException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Base testcase class for all Guzzle testcases.
 */
abstract class GuzzleTestCase extends \PHPUnit_Framework_TestCase
{
    protected static $mockBasePath;
    public static $serviceBuilder;
    public static $server;

    private $requests = array();
    public $mockObserver;

    /**
     * Get the global server object used throughout the unit tests of Guzzle
     *
     * @return Server
     */
    public static function getServer()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the service builder to use for tests
     *
     * @param ServiceBuilderInterface $builder Service builder
     */
    public static function setServiceBuilder(ServiceBuilderInterface $builder)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a service builder object that can be used throughout the service tests
     *
     * @return ServiceBuilder
     */
    public static function getServiceBuilder()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if an event dispatcher has a subscriber
     *
     * @param HasDispatcherInterface $dispatcher
     * @param EventSubscriberInterface $subscriber
     *
     * @return bool
     */
    protected function hasSubscriber(HasDispatcherInterface $dispatcher, EventSubscriberInterface $subscriber)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a wildcard observer for an event dispatcher
     *
     * @param HasDispatcherInterface $hasDispatcher
     *
     * @return MockObserver
     */
    public function getWildcardObserver(HasDispatcherInterface $hasDispatcher)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the mock response base path
     *
     * @param string $path Path to mock response folder
     *
     * @return GuzzleTestCase
     */
    public static function setMockBasePath($path)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Mark a request as being mocked
     *
     * @param RequestInterface $request
     *
     * @return self
     */
    public function addMockedRequest(RequestInterface $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get all of the mocked requests
     *
     * @return array
     */
    public function getMockedRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a mock response for a client by mock file name
     *
     * @param string $path Relative path to the mock response file
     *
     * @return Response
     */
    public function getMockResponse($path)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set a mock response from a mock file on the next client request.
     *
     * This method assumes that mock response files are located under the
     * Command/Mock/ directory of the Service being tested
     * (e.g. Unfuddle/Command/Mock/).  A mock response is added to the next
     * request sent by the client.
     *
     * @param Client $client Client object to modify
     * @param string $paths  Path to files within the Mock folder of the service
     *
     * @return MockPlugin returns the created mock plugin
     */
    public function setMockResponse(Client $client, $paths)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Compare HTTP headers and use special markup to filter values
     * A header prefixed with '!' means it must not exist
     * A header prefixed with '_' means it must be ignored
     * A header value of '*' means anything after the * will be ignored
     *
     * @param array $filteredHeaders Array of special headers
     * @param array $actualHeaders Array of headers to check against
     *
     * @return array|bool Returns an array of the differences or FALSE if none
     */
    public function compareHeaders($filteredHeaders, $actualHeaders)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Case insensitive assertContains
     *
     * @param string $needle Search string
     * @param string $haystack Search this
     * @param string $message Optional failure message
     */
    public function assertContainsIns($needle, $haystack, $message = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
