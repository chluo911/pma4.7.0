<?php

namespace Guzzle\Iterator;

use Guzzle\Common\Exception\InvalidArgumentException;

/**
 * Filters values using a callback
 *
 * Used when PHP 5.4's {@see \CallbackFilterIterator} is not available
 */
class FilterIterator extends \FilterIterator
{
    /** @var mixed Callback used for filtering */
    protected $callback;

    /**
     * @param \Iterator      $iterator Traversable iterator
     * @param array|\Closure $callback Callback used for filtering. Return true to keep or false to filter.
     *
     * @throws InvalidArgumentException if the callback if not callable
     */
    public function __construct(\Iterator $iterator, $callback)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function accept()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
