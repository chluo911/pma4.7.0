<?php

namespace Guzzle\Plugin\Cache;

use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;

/**
 * Determines if a request can be cached using a callback
 */
class CallbackCanCacheStrategy extends DefaultCanCacheStrategy
{
    /** @var callable Callback for request */
    protected $requestCallback;

    /** @var callable Callback for response */
    protected $responseCallback;

    /**
     * @param \Closure|array|mixed $requestCallback  Callable method to invoke for requests
     * @param \Closure|array|mixed $responseCallback Callable method to invoke for responses
     *
     * @throws InvalidArgumentException
     */
    public function __construct($requestCallback = null, $responseCallback = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function canCacheRequest(RequestInterface $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function canCacheResponse(Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
