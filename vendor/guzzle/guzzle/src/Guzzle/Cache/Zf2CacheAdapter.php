<?php

namespace Guzzle\Cache;

use Zend\Cache\Storage\StorageInterface;

/**
 * Zend Framework 2 cache adapter
 *
 * @link http://packages.zendframework.com/docs/latest/manual/en/zend.cache.html
 */
class Zf2CacheAdapter extends AbstractCacheAdapter
{
    /**
     * @param StorageInterface $cache Zend Framework 2 cache adapter
     */
    public function __construct(StorageInterface $cache)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function contains($id, array $options = null)
    {
        return $this->cache->hasItem($id);
    }

    public function delete($id, array $options = null)
    {
        return $this->cache->removeItem($id);
    }

    public function fetch($id, array $options = null)
    {
        return $this->cache->getItem($id);
    }

    public function save($id, $data, $lifeTime = false, array $options = null)
    {
        return $this->cache->setItem($id, $data);
    }
}
