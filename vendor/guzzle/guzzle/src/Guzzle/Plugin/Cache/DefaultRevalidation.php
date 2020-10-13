<?php

namespace Guzzle\Plugin\Cache;

use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Exception\BadResponseException;

/**
 * Default revalidation strategy
 */
class DefaultRevalidation implements RevalidationInterface
{
    /** @var CacheStorageInterface Cache object storing cache data */
    protected $storage;

    /** @var CanCacheStrategyInterface */
    protected $canCache;

    /**
     * @param CacheStorageInterface     $cache    Cache storage
     * @param CanCacheStrategyInterface $canCache Determines if a message can be cached
     */
    public function __construct(CacheStorageInterface $cache, CanCacheStrategyInterface $canCache = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function revalidate(RequestInterface $request, Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function shouldRevalidate(RequestInterface $request, Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handles a bad response when attempting to revalidate
     *
     * @param BadResponseException $e Exception encountered
     *
     * @throws BadResponseException
     */
    protected function handleBadResponse(BadResponseException $e)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates a request to use for revalidation
     *
     * @param RequestInterface $request  Request
     * @param Response         $response Response to revalidate
     *
     * @return RequestInterface returns a revalidation request
     */
    protected function createRevalidationRequest(RequestInterface $request, Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handles a 200 response response from revalidating. The server does not support validation, so use this response.
     *
     * @param RequestInterface $request          Request that was sent
     * @param Response         $validateResponse Response received
     *
     * @return bool Returns true if valid, false if invalid
     */
    protected function handle200Response(RequestInterface $request, Response $validateResponse)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handle a 304 response and ensure that it is still valid
     *
     * @param RequestInterface $request          Request that was sent
     * @param Response         $validateResponse Response received
     * @param Response         $response         Original cached response
     *
     * @return bool Returns true if valid, false if invalid
     */
    protected function handle304Response(RequestInterface $request, Response $validateResponse, Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
