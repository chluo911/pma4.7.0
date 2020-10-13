<?php

namespace Guzzle\Plugin\Backoff;

use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Exception\HttpException;

/**
 * Strategy that will invoke a closure to determine whether or not to retry with a delay
 */
class CallbackBackoffStrategy extends AbstractBackoffStrategy
{
    /** @var \Closure|array|mixed Callable method to invoke */
    protected $callback;

    /** @var bool Whether or not this strategy makes a retry decision */
    protected $decision;

    /**
     * @param \Closure|array|mixed     $callback Callable method to invoke
     * @param bool                     $decision Set to true if this strategy makes a backoff decision
     * @param BackoffStrategyInterface $next     The optional next strategy
     *
     * @throws InvalidArgumentException
     */
    public function __construct($callback, $decision, BackoffStrategyInterface $next = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

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
