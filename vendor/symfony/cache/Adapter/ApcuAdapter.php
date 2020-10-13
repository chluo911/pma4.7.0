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

use Symfony\Component\Cache\CacheItem;
use Symfony\Component\Cache\Exception\CacheException;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ApcuAdapter extends AbstractAdapter
{
    public static function isSupported()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function __construct($namespace = '', $defaultLifetime = 0, $version = null)
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
    protected function doFetch(array $ids)
    {
        try {
            return apcu_fetch($ids);
        } catch (\Error $e) {
            throw new \ErrorException($e->getMessage(), $e->getCode(), E_ERROR, $e->getFile(), $e->getLine());
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function doHave($id)
    {
        return apcu_exists($id);
    }

    /**
     * {@inheritdoc}
     */
    protected function doClear($namespace)
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
    protected function doDelete(array $ids)
    {
        foreach ($ids as $id) {
            apcu_delete($id);
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doSave(array $values, $lifetime)
    {
        try {
            return array_keys(apcu_store($values, null, $lifetime));
        } catch (\Error $e) {
        } catch (\Exception $e) {
        }

        if (1 === count($values)) {
            // Workaround https://github.com/krakjoe/apcu/issues/170
            apcu_delete(key($values));
        }

        throw $e;
    }
}
