<?php

namespace Guzzle\Plugin\Cache;

use Guzzle\Cache\CacheAdapterFactory;
use Guzzle\Cache\CacheAdapterInterface;
use Guzzle\Http\EntityBodyInterface;
use Guzzle\Http\Message\MessageInterface;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;

/**
 * Default cache storage implementation
 */
class DefaultCacheStorage implements CacheStorageInterface
{
    /** @var string */
    protected $keyPrefix;

    /** @var CacheAdapterInterface Cache used to store cache data */
    protected $cache;

    /** @var int Default cache TTL */
    protected $defaultTtl;

    /**
     * @param mixed  $cache      Cache used to store cache data
     * @param string $keyPrefix  Provide an optional key prefix to prefix on all cache keys
     * @param int    $defaultTtl Default cache TTL
     */
    public function __construct($cache, $keyPrefix = '', $defaultTtl = 3600)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function cache(RequestInterface $request, Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function delete(RequestInterface $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function purge($url)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function fetch(RequestInterface $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Hash a request URL into a string that returns cache metadata
     *
     * @param RequestInterface $request
     *
     * @return string
     */
    protected function getCacheKey(RequestInterface $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create a cache key for a response's body
     *
     * @param string              $url  URL of the entry
     * @param EntityBodyInterface $body Response body
     *
     * @return string
     */
    protected function getBodyKey($url, EntityBodyInterface $body)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Determines whether two Request HTTP header sets are non-varying
     *
     * @param string $vary Response vary header
     * @param array  $r1   HTTP header array
     * @param array  $r2   HTTP header array
     *
     * @return bool
     */
    private function requestsMatch($vary, $r1, $r2)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates an array of cacheable and normalized message headers
     *
     * @param MessageInterface $message
     *
     * @return array
     */
    private function persistHeaders(MessageInterface $message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
