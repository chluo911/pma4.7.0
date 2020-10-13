<?php

namespace Guzzle\Cache;

use Doctrine\Common\Cache\Cache;
use Guzzle\Common\Version;
use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Common\Exception\RuntimeException;
use Guzzle\Common\FromConfigInterface;
use Zend\Cache\Storage\StorageInterface;

/**
 * Generates cache adapters from any number of known cache implementations
 */
class CacheAdapterFactory implements FromConfigInterface
{
    /**
     * Create a Guzzle cache adapter based on an array of options
     *
     * @param mixed $cache Cache value
     *
     * @return CacheAdapterInterface
     * @throws InvalidArgumentException
     */
    public static function fromCache($cache)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create a Guzzle cache adapter based on an array of options
     *
     * @param array $config Array of configuration options
     *
     * @return CacheAdapterInterface
     * @throws InvalidArgumentException
     * @deprecated This will be removed in a future version
     * @codeCoverageIgnore
     */
    public static function factory($config = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create a class using an array of constructor arguments
     *
     * @param string $className Class name
     * @param array  $args      Arguments for the class constructor
     *
     * @return mixed
     * @throws RuntimeException
     * @deprecated
     * @codeCoverageIgnore
     */
    private static function createObject($className, array $args = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
