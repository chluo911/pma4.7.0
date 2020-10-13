<?php

namespace Guzzle\Cache;

/**
 * Cache adapter that defers to closures for implementation
 */
class ClosureCacheAdapter implements CacheAdapterInterface
{
    /**
     * @var array Mapping of method names to callables
     */
    protected $callables;

    /**
     * The callables array is an array mapping the actions of the cache adapter to callables.
     * - contains: Callable that accepts an $id and $options argument
     * - delete:   Callable that accepts an $id and $options argument
     * - fetch:    Callable that accepts an $id and $options argument
     * - save:     Callable that accepts an $id, $data, $lifeTime, and $options argument
     *
     * @param array $callables array of action names to callable
     *
     * @throws \InvalidArgumentException if the callable is not callable
     */
    public function __construct(array $callables)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function contains($id, array $options = null)
    {
        return call_user_func($this->callables['contains'], $id, $options);
    }

    public function delete($id, array $options = null)
    {
        return call_user_func($this->callables['delete'], $id, $options);
    }

    public function fetch($id, array $options = null)
    {
        return call_user_func($this->callables['fetch'], $id, $options);
    }

    public function save($id, $data, $lifeTime = false, array $options = null)
    {
        return call_user_func($this->callables['save'], $id, $data, $lifeTime, $options);
    }
}
