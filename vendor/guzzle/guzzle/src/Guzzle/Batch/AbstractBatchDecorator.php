<?php

namespace Guzzle\Batch;

/**
 * Abstract decorator used when decorating a BatchInterface
 */
abstract class AbstractBatchDecorator implements BatchInterface
{
    /** @var BatchInterface Decorated batch object */
    protected $decoratedBatch;

    /**
     * @param BatchInterface $decoratedBatch  BatchInterface that is being decorated
     */
    public function __construct(BatchInterface $decoratedBatch)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Allow decorators to implement custom methods
     *
     * @param string $method Missing method name
     * @param array  $args   Method arguments
     *
     * @return mixed
     * @codeCoverageIgnore
     */
    public function __call($method, array $args)
    {
        return call_user_func_array(array($this->decoratedBatch, $method), $args);
    }

    public function add($item)
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

    public function isEmpty()
    {
        return $this->decoratedBatch->isEmpty();
    }

    /**
     * Trace the decorators associated with the batch
     *
     * @return array
     */
    public function getDecorators()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
