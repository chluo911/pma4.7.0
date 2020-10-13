<?php

namespace Guzzle\Tests\Http;

use Guzzle\Http\Exception\BadResponseException;
use Guzzle\Common\Exception\RuntimeException;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\RequestFactory;
use Guzzle\Http\Client;

/**
 * The Server class is used to control a scripted webserver using node.js that
 * will respond to HTTP requests with queued responses.
 *
 * Queued responses will be served to requests using a FIFO order.  All requests
 * received by the server are stored on the node.js server and can be retrieved
 * by calling {@see Server::getReceivedRequests()}.
 *
 * Mock responses that don't require data to be transmitted over HTTP a great
 * for testing.  Mock response, however, cannot test the actual sending of an
 * HTTP request using cURL.  This test server allows the simulation of any
 * number of HTTP request response transactions to test the actual sending of
 * requests over the wire without having to leave an internal network.
 */
class Server
{
    const DEFAULT_PORT = 8124;
    const REQUEST_DELIMITER = "\n----[request]\n";

    /** @var int Port that the server will listen on */
    private $port;

    /** @var bool Is the server running */
    private $running = false;

    /** @var Client */
    private $client;

    /**
     * Create a new scripted server
     *
     * @param int $port Port to listen on (defaults to 8124)
     */
    public function __construct($port = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Flush the received requests from the server
     * @throws RuntimeException
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
     * Queue an array of responses or a single response on the server.
     *
     * Any currently queued responses will be overwritten.  Subsequent requests
     * on the server will return queued responses in FIFO order.
     *
     * @param array|Response $responses A single or array of Responses to queue
     * @throws BadResponseException
     */
    public function enqueue($responses)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if the server is running
     *
     * @return bool
     */
    public function isRunning()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the URL to the server
     *
     * @return string
     */
    public function getUrl()
    {
        return 'http://127.0.0.1:' . $this->getPort() . '/';
    }

    /**
     * Get the port that the server is listening on
     *
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Get all of the received requests
     *
     * @param bool $hydrate Set to TRUE to turn the messages into
     *      actual {@see RequestInterface} objects.  If $hydrate is FALSE,
     *      requests will be returned as strings.
     *
     * @return array
     * @throws RuntimeException
     */
    public function getReceivedRequests($hydrate = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Start running the node.js server in the background
     */
    public function start()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Stop running the node.js server
     */
    public function stop()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
