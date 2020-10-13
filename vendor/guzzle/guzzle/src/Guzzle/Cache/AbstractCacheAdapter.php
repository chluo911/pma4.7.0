<?php

namespace Guzzle\Cache;

/**
 * Abstract cache adapter
 */
abstract class AbstractCacheAdapter implements CacheAdapterInterface
{
    protected $cache;

    /**
     * Get the object owned by the adapter
     *
     * @return mixed
     */
    public function getCacheObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
