<?php

namespace Guzzle\Service\Resource;

use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Service\Command\CommandInterface;

/**
 * Factory that utilizes multiple factories for creating iterators
 */
class CompositeResourceIteratorFactory implements ResourceIteratorFactoryInterface
{
    /** @var array Array of factories */
    protected $factories;

    /** @param array $factories Array of factories used to instantiate iterators */
    public function __construct(array $factories)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function build(CommandInterface $command, array $options = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function canBuild(CommandInterface $command)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add a factory to the composite factory
     *
     * @param ResourceIteratorFactoryInterface $factory Factory to add
     *
     * @return self
     */
    public function addFactory(ResourceIteratorFactoryInterface $factory)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the factory that matches the command object
     *
     * @param CommandInterface $command Command retrieving the iterator for
     *
     * @return ResourceIteratorFactoryInterface|bool
     */
    protected function getFactory(CommandInterface $command)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
