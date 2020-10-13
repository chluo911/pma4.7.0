<?php

namespace Guzzle\Inflection;

/**
 * Decorator used to add memoization to previously inflected words
 */
class MemoizingInflector implements InflectorInterface
{
    /** @var array Array of cached inflections */
    protected $cache = array(
        'snake' => array(),
        'camel' => array()
    );

    /** @var int Max entries per cache */
    protected $maxCacheSize;

    /** @var InflectorInterface Decorated inflector */
    protected $decoratedInflector;

    /**
     * @param InflectorInterface $inflector    Inflector being decorated
     * @param int                $maxCacheSize Maximum number of cached items to hold per cache
     */
    public function __construct(InflectorInterface $inflector, $maxCacheSize = 500)
    {
        $this->decoratedInflector = $inflector;
        $this->maxCacheSize = $maxCacheSize;
    }

    public function snake($word)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts strings from snake_case to upper CamelCase
     *
     * @param string $word Value to convert into upper CamelCase
     *
     * @return string
     */
    public function camel($word)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Prune one of the named caches by removing 20% of the cache if it is full
     *
     * @param string $cache Type of cache to prune
     */
    protected function pruneCache($cache)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
