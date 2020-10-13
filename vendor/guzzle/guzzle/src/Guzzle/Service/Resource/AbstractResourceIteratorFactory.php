<?php

namespace Guzzle\Service\Resource;

use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Service\Command\CommandInterface;

/**
 * Abstract resource iterator factory implementation
 */
abstract class AbstractResourceIteratorFactory implements ResourceIteratorFactoryInterface
{
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
     * Get the name of the class to instantiate for the command
     *
     * @param CommandInterface $command Command that is associated with the iterator
     *
     * @return string
     */
    abstract protected function getClassName(CommandInterface $command);
}
