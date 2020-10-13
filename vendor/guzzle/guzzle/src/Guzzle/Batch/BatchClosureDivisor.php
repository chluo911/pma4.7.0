<?php

namespace Guzzle\Batch;

use Guzzle\Common\Exception\InvalidArgumentException;

/**
 * Divides batches using a callable
 */
class BatchClosureDivisor implements BatchDivisorInterface
{
    /** @var callable Method used to divide the batches */
    protected $callable;

    /** @var mixed $context Context passed to the callable */
    protected $context;

    /**
     * @param callable $callable Method used to divide the batches. The method must accept an \SplQueue and return an
     *                           array of arrays containing the divided items.
     * @param mixed    $context  Optional context to pass to the batch divisor
     *
     * @throws InvalidArgumentException if the callable is not callable
     */
    public function __construct($callable, $context = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function createBatches(\SplQueue $queue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
