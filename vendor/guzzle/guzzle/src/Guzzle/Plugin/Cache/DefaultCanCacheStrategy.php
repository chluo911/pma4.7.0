<?php

namespace Guzzle\Plugin\Cache;

use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;

/**
 * Default strategy used to determine of an HTTP request can be cached
 */
class DefaultCanCacheStrategy implements CanCacheStrategyInterface
{
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
