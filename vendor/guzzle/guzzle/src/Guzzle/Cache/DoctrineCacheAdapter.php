<?php

namespace Guzzle\Cache;

use Doctrine\Common\Cache\Cache;

/**
 * Doctrine 2 cache adapter
 *
 * @link http://www.doctrine-project.org/
 */
class DoctrineCacheAdapter extends AbstractCacheAdapter
{
    /**
     * @param Cache $cache Doctrine cache object
     */
    public function __construct(Cache $cache)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function contains($id, array $options = null)
    {
        return $this->cache->contains($id);
    }

    public function delete($id, array $options = null)
    {
        return $this->cache->delete($id);
    }

    public function fetch($id, array $options = null)
    {
        return $this->cache->fetch($id);
    }

    public function save($id, $data, $lifeTime = false, array $options = null)
    {
        return $this->cache->save($id, $data, $lifeTime !== false ? $lifeTime : 0);
    }
}
