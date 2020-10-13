<?php

namespace Guzzle\Common;

use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Common\Exception\RuntimeException;

/**
 * Key value pair collection object
 */
class Collection implements \ArrayAccess, \IteratorAggregate, \Countable, ToArrayInterface
{
    /** @var array Data associated with the object. */
    protected $data;

    /**
     * @param array $data Associative array of data to set
     */
    public function __construct(array $data = array())
    {
        $this->data = $data;
    }

    /**
     * Create a new collection from an array, validate the keys, and add default values where missing
     *
     * @param array $config   Configuration values to apply.
     * @param array $defaults Default parameters
     * @param array $required Required parameter names
     *
     * @return self
     * @throws InvalidArgumentException if a parameter is missing
     */
    public static function fromConfig(array $config = array(), array $defaults = array(), array $required = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function count()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getIterator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function toArray()
    {
        return $this->data;
    }

    /**
     * Removes all key value pairs
     *
     * @return Collection
     */
    public function clear()
    {
        $this->data = array();

        return $this;
    }

    /**
     * Get all or a subset of matching key value pairs
     *
     * @param array $keys Pass an array of keys to retrieve only a subset of key value pairs
     *
     * @return array Returns an array of all matching key value pairs
     */
    public function getAll(array $keys = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a specific key value.
     *
     * @param string $key Key to retrieve.
     *
     * @return mixed|null Value of the key or NULL
     */
    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    /**
     * Set a key value pair
     *
     * @param string $key   Key to set
     * @param mixed  $value Value to set
     *
     * @return Collection Returns a reference to the object
     */
    public function set($key, $value)
    {
        $this->data[$key] = $value;

        return $this;
    }

    /**
     * Add a value to a key.  If a key of the same name has already been added, the key value will be converted into an
     * array and the new value will be pushed to the end of the array.
     *
     * @param string $key   Key to add
     * @param mixed  $value Value to add to the key
     *
     * @return Collection Returns a reference to the object.
     */
    public function add($key, $value)
    {
        if (!array_key_exists($key, $this->data)) {
            $this->data[$key] = $value;
        } elseif (is_array($this->data[$key])) {
            $this->data[$key][] = $value;
        } else {
            $this->data[$key] = array($this->data[$key], $value);
        }

        return $this;
    }

    /**
     * Remove a specific key value pair
     *
     * @param string $key A key to remove
     *
     * @return Collection
     */
    public function remove($key)
    {
        unset($this->data[$key]);

        return $this;
    }

    /**
     * Get all keys in the collection
     *
     * @return array
     */
    public function getKeys()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns whether or not the specified key is present.
     *
     * @param string $key The key for which to check the existence.
     *
     * @return bool
     */
    public function hasKey($key)
    {
        return array_key_exists($key, $this->data);
    }

    /**
     * Case insensitive search the keys in the collection
     *
     * @param string $key Key to search for
     *
     * @return bool|string Returns false if not found, otherwise returns the key
     */
    public function keySearch($key)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks if any keys contains a certain value
     *
     * @param string $value Value to search for
     *
     * @return mixed Returns the key if the value was found FALSE if the value was not found.
     */
    public function hasValue($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Replace the data of the object with the value of an array
     *
     * @param array $data Associative array of data
     *
     * @return Collection Returns a reference to the object
     */
    public function replace(array $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Add and merge in a Collection or array of key value pair data.
     *
     * @param Collection|array $data Associative array of key value pair data
     *
     * @return Collection Returns a reference to the object.
     */
    public function merge($data)
    {
        foreach ($data as $key => $value) {
            $this->add($key, $value);
        }

        return $this;
    }

    /**
     * Over write key value pairs in this collection with all of the data from an array or collection.
     *
     * @param array|\Traversable $data Values to override over this config
     *
     * @return self
     */
    public function overwriteWith($data)
    {
        if (is_array($data)) {
            $this->data = $data + $this->data;
        } elseif ($data instanceof Collection) {
            $this->data = $data->toArray() + $this->data;
        } else {
            foreach ($data as $key => $value) {
                $this->data[$key] = $value;
            }
        }

        return $this;
    }

    /**
     * Returns a Collection containing all the elements of the collection after applying the callback function to each
     * one. The Closure should accept three parameters: (string) $key, (string) $value, (array) $context and return a
     * modified value
     *
     * @param \Closure $closure Closure to apply
     * @param array    $context Context to pass to the closure
     * @param bool     $static  Set to TRUE to use the same class as the return rather than returning a Collection
     *
     * @return Collection
     */
    public function map(\Closure $closure, array $context = array(), $static = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Iterates over each key value pair in the collection passing them to the Closure. If the  Closure function returns
     * true, the current value from input is returned into the result Collection.  The Closure must accept three
     * parameters: (string) $key, (string) $value and return Boolean TRUE or FALSE for each value.
     *
     * @param \Closure $closure Closure evaluation function
     * @param bool     $static  Set to TRUE to use the same class as the return rather than returning a Collection
     *
     * @return Collection
     */
    public function filter(\Closure $closure, $static = true)
    {
        $collection = ($static) ? new static() : new self();
        foreach ($this->data as $key => $value) {
            if ($closure($key, $value)) {
                $collection->add($key, $value);
            }
        }

        return $collection;
    }

    public function offsetExists($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function offsetGet($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function offsetSet($offset, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function offsetUnset($offset)
    {
        unset($this->data[$offset]);
    }

    /**
     * Set a value into a nested array key. Keys will be created as needed to set the value.
     *
     * @param string $path  Path to set
     * @param mixed  $value Value to set at the key
     *
     * @return self
     * @throws RuntimeException when trying to setPath using a nested path that travels through a scalar value
     */
    public function setPath($path, $value)
    {
        $current =& $this->data;
        $queue = explode('/', $path);
        while (null !== ($key = array_shift($queue))) {
            if (!is_array($current)) {
                throw new RuntimeException("Trying to setPath {$path}, but {$key} is set and is not an array");
            } elseif (!$queue) {
                $current[$key] = $value;
            } elseif (isset($current[$key])) {
                $current =& $current[$key];
            } else {
                $current[$key] = array();
                $current =& $current[$key];
            }
        }

        return $this;
    }

    /**
     * Gets a value from the collection using an array path (e.g. foo/baz/bar would retrieve bar from two nested arrays)
     * Allows for wildcard searches which recursively combine matches up to the level at which the wildcard occurs. This
     * can be useful for accepting any key of a sub-array and combining matching keys from each diverging path.
     *
     * @param string $path      Path to traverse and retrieve a value from
     * @param string $separator Character used to add depth to the search
     * @param mixed  $data      Optional data to descend into (used when wildcards are encountered)
     *
     * @return mixed|null
     */
    public function getPath($path, $separator = '/', $data = null)
    {
        if ($data === null) {
            $data =& $this->data;
        }

        $path = is_array($path) ? $path : explode($separator, $path);
        while (null !== ($part = array_shift($path))) {
            if (!is_array($data)) {
                return null;
            } elseif (isset($data[$part])) {
                $data =& $data[$part];
            } elseif ($part != '*') {
                return null;
            } else {
                // Perform a wildcard search by diverging and merging paths
                $result = array();
                foreach ($data as $value) {
                    if (!$path) {
                        $result = array_merge_recursive($result, (array) $value);
                    } elseif (null !== ($test = $this->getPath($path, $separator, $value))) {
                        $result = array_merge_recursive($result, (array) $test);
                    }
                }
                return $result;
            }
        }

        return $data;
    }

    /**
     * Inject configuration settings into an input string
     *
     * @param string $input Input to inject
     *
     * @return string
     * @deprecated
     */
    public function inject($input)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
