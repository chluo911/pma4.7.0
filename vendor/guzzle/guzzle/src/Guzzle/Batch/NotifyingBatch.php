<?php

namespace Guzzle\Batch;

use Guzzle\Common\Exception\InvalidArgumentException;

/**
 * BatchInterface decorator used to call a method each time flush is called
 */
class NotifyingBatch extends AbstractBatchDecorator
{
    /** @var mixed Callable to call */
    protected $callable;

    /**
     * @param BatchInterface $decoratedBatch Batch object to decorate
     * @param mixed          $callable       Callable to call
     *
     * @throws InvalidArgumentException
     */
    public function __construct(BatchInterface $decoratedBatch, $callable)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function flush()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
