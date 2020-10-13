<?php

namespace Guzzle\Http\Exception;

use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;

/**
 * Http request exception thrown when a bad response is received
 */
class BadResponseException extends RequestException
{
    /** @var Response */
    private $response;

    /**
     * Factory method to create a new response exception based on the response code.
     *
     * @param RequestInterface $request  Request
     * @param Response         $response Response received
     *
     * @return BadResponseException
     */
    public static function factory(RequestInterface $request, Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the response that caused the exception
     *
     * @param Response $response Response to set
     */
    public function setResponse(Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the response that caused the exception
     *
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}
