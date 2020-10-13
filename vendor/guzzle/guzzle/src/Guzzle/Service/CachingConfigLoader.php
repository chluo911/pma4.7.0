<?php

namespace Guzzle\Service;

use Guzzle\Cache\CacheAdapterInterface;

/**
 * Decorator that adds caching to a service description loader
 */
class CachingConfigLoader implements ConfigLoaderInterface
{
    /** @var ConfigLoaderInterface */
    protected $loader;

    /** @var CacheAdapterInterface */
    protected $cache;

    /**
     * @param ConfigLoaderInterface $loader Loader used to load the config when there is a cache miss
     * @param CacheAdapterInterface $cache  Object used to cache the loaded result
     */
    public function __construct(ConfigLoaderInterface $loader, CacheAdapterInterface $cache)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function load($config, array $options = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
