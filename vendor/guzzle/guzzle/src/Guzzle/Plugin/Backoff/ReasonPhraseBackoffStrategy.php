<?php

namespace Guzzle\Plugin\Backoff;

use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Exception\HttpException;

/**
 * Strategy used to retry HTTP requests when the response's reason phrase matches one of the registered phrases.
 */
class ReasonPhraseBackoffStrategy extends AbstractErrorCodeBackoffStrategy
{
    public function makesDecision()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getDelay($retries, RequestInterface $request, Response $response = null, HttpException $e = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
