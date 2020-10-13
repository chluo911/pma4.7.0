<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Cache\Adapter;

use Psr\Cache\CacheItemInterface;
use Symfony\Component\Cache\CacheItem;

/**
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class NullAdapter implements AdapterInterface
{
    private $createCacheItem;

    public function __construct()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritdoc}
     */
    public function getItem($key)
    {
        $f = $this->createCacheItem;

        return $f($key);
    }

    /**
     * {@inheritdoc}
     */
    public function getItems(array $keys = array())
    {
        return $this->generateItems($keys);
    }

    /**
     * {@inheritdoc}
     */
    public function hasItem($key)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItem($key)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function deleteItems(array $keys)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function save(CacheItemInterface $item)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function saveDeferred(CacheItemInterface $item)
    {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function commit()
    {
        return false;
    }

    private function generateItems(array $keys)
    {
        $f = $this->createCacheItem;

        foreach ($keys as $key) {
            yield $key => $f($key);
        }
    }
}
