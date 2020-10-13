<?php

namespace Guzzle\Service\Builder;

use Guzzle\Service\AbstractConfigLoader;
use Guzzle\Service\Exception\ServiceNotFoundException;

/**
 * Service builder config loader
 */
class ServiceBuilderLoader extends AbstractConfigLoader
{
    protected function build($config, array $options)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function mergeData(array $a, array $b)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
