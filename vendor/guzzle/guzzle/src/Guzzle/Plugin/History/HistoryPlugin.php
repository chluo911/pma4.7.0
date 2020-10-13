<?php

namespace Guzzle\Plugin\History;

use Guzzle\Common\Event;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Maintains a list of requests and responses sent using a request or client
 */
class HistoryPlugin implements EventSubscriberInterface, \IteratorAggregate, \Countable
{
    /** @var int The maximum number of requests to maintain in the history */
    protected $limit = 10;

    /** @var array Requests and responses that have passed through the plugin */
    protected $transactions = array();

    public static function getSubscribedEvents()
    {
        return array('request.sent' => array('onRequestSent', 9999));
    }

    /**
     * Convert to a string that contains all request and response headers
     *
     * @return string
     */
    public function __toString()
    {
        $lines = array();
        foreach ($this->transactions as $entry) {
            $response = isset($entry['response']) ? $entry['response'] : '';
            $lines[] = '> ' . trim($entry['request']) . "\n\n< " . trim($response) . "\n";
        }

        return implode("\n", $lines);
    }

    /**
     * Add a request to the history
     *
     * @param RequestInterface $request  Request to add
     * @param Response         $response Response of the request
     *
     * @return HistoryPlugin
     */
    public function add(RequestInterface $request, Response $response = null)
    {
        if (!$response && $request->getResponse()) {
            $response = $request->getResponse();
        }

        $this->transactions[] = array('request' => $request, 'response' => $response);
        if (count($this->transactions) > $this->getlimit()) {
            array_shift($this->transactions);
        }

        return $this;
    }

    /**
     * Set the max number of requests to store
     *
     * @param int $limit Limit
     *
     * @return HistoryPlugin
     */
    public function setLimit($limit)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the request limit
     *
     * @return int
     */
    public function getLimit()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get all of the raw transactions in the form of an array of associative arrays containing
     * 'request' and 'response' keys.
     *
     * @return array
     */
    public function getAll()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the requests in the history
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the number of requests in the history
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
     * Get the last request sent
     *
     * @return RequestInterface
     */
    public function getLastRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the last response in the history
     *
     * @return Response|null
     */
    public function getLastResponse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Clears the history
     *
     * @return HistoryPlugin
     */
    public function clear()
    {
        $this->transactions = array();

        return $this;
    }

    public function onRequestSent(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
