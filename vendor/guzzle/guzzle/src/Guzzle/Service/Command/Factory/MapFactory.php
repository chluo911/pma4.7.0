<?php

namespace Guzzle\Service\Command\Factory;

/**
 * Command factory used when explicitly mapping strings to command classes
 */
class MapFactory implements FactoryInterface
{
    /** @var array Associative array mapping command names to classes */
    protected $map;

    /** @param array $map Associative array mapping command names to classes */
    public function __construct(array $map)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function factory($name, array $args = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
