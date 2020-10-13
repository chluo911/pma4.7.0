<?php

namespace Guzzle\Plugin\Cache;

use Guzzle\Cache\CacheAdapterFactory;
use Guzzle\Cache\CacheAdapterInterface;
use Guzzle\Common\Event;
use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Common\Version;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;
use Guzzle\Cache\DoctrineCacheAdapter;
use Guzzle\Http\Exception\CurlException;
use Doctrine\Common\Cache\ArrayCache;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Plugin to enable the caching of GET and HEAD requests.  Caching can be done on all requests passing through this
 * plugin or only after retrieving resources with cacheable response headers.
 *
 * This is a simple implementation of RFC 2616 and should be considered a private transparent proxy cache, meaning
 * authorization and private data can be cached.
 *
 * It also implements RFC 5861's `stale-if-error` Cache-Control extension, allowing stale cache responses to be used
 * when an error is encountered (such as a `500 Internal Server Error` or DNS failure).
 */
class CachePlugin implements EventSubscriberInterface
{
    /** @var RevalidationInterface Cache revalidation strategy */
    protected $revalidation;

    /** @var CanCacheStrategyInterface Object used to determine if a request can be cached */
    protected $canCache;

    /** @var CacheStorageInterface $cache Object used to cache responses */
    protected $storage;

    /** @var bool */
    protected $autoPurge;

    /**
     * @param array|CacheAdapterInterface|CacheStorageInterface $options Array of options for the cache plugin,
     *     cache adapter, or cache storage object.
     *     - CacheStorageInterface storage:      Adapter used to cache responses
     *     - RevalidationInterface revalidation: Cache revalidation strategy
     *     - CanCacheInterface     can_cache:    Object used to determine if a request can be cached
     *     - bool                  auto_purge    Set to true to automatically PURGE resources when non-idempotent
     *                                           requests are sent to a resource. Defaults to false.
     * @throws InvalidArgumentException if no cache is provided and Doctrine cache is not installed
     */
    public function __construct($options = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getSubscribedEvents()
    {
        return array(
            'request.before_send' => array('onRequestBeforeSend', -255),
            'request.sent'        => array('onRequestSent', 255),
            'request.error'       => array('onRequestError', 0),
            'request.exception'   => array('onRequestException', 0),
        );
    }

    /**
     * Check if a response in cache will satisfy the request before sending
     *
     * @param Event $event
     */
    public function onRequestBeforeSend(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * If possible, store a response in cache after sending
     *
     * @param Event $event
     */
    public function onRequestSent(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * If possible, return a cache response on an error
     *
     * @param Event $event
     */
    public function onRequestError(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * If possible, set a cache response on a cURL exception
     *
     * @param Event $event
     *
     * @return null
     */
    public function onRequestException(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if a cache response satisfies a request's caching constraints
     *
     * @param RequestInterface $request  Request to validate
     * @param Response         $response Response to validate
     *
     * @return bool
     */
    public function canResponseSatisfyRequest(RequestInterface $request, Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if a cache response satisfies a failed request's caching constraints
     *
     * @param RequestInterface $request  Request to validate
     * @param Response         $response Response to validate
     *
     * @return bool
     */
    public function canResponseSatisfyFailedRequest(RequestInterface $request, Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Purge all cache entries for a given URL
     *
     * @param string $url URL to purge
     */
    public function purge($url)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add the plugin's headers to a response
     *
     * @param RequestInterface $request  Request
     * @param Response         $response Response to add headers to
     */
    protected function addResponseHeaders(RequestInterface $request, Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
