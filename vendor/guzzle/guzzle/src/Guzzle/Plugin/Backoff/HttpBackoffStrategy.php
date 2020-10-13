<?php

namespace Guzzle\Plugin\Backoff;

use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Exception\HttpException;

/**
 * Strategy used to retry HTTP requests based on the response code.
 *
 * Retries 500 and 503 error by default.
 */
class HttpBackoffStrategy extends AbstractErrorCodeBackoffStrategy
{
    /** @var array Default cURL errors to retry */
    protected static $defaultErrorCodes = array(500, 503);

    protected function getDelay($retries, RequestInterface $request, Response $response = null, HttpException $e = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
