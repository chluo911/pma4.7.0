<?php

namespace Guzzle\Service\Description;

use Guzzle\Service\AbstractConfigLoader;
use Guzzle\Service\Exception\DescriptionBuilderException;

/**
 * Loader for service descriptions
 */
class ServiceDescriptionLoader extends AbstractConfigLoader
{
    protected function build($config, array $options)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $name       Name of the operation
     * @param array  $op         Operation value array
     * @param array  $operations Currently loaded operations
     * @throws DescriptionBuilderException when extending a non-existent operation
     */
    protected function resolveExtension($name, array &$op, array &$operations)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
