<?php

namespace Guzzle\Service\Resource;

use Guzzle\Inflection\InflectorInterface;
use Guzzle\Inflection\Inflector;
use Guzzle\Service\Command\CommandInterface;

/**
 * Factory for creating {@see ResourceIteratorInterface} objects using a convention of storing iterator classes under a
 * root namespace using the name of a {@see CommandInterface} object as a convention for determining the name of an
 * iterator class. The command name is converted to CamelCase and Iterator is appended (e.g. abc_foo => AbcFoo).
 */
class ResourceIteratorClassFactory extends AbstractResourceIteratorFactory
{
    /** @var array List of namespaces used to look for classes */
    protected $namespaces;

    /** @var InflectorInterface Inflector used to determine class names */
    protected $inflector;

    /**
     * @param string|array       $namespaces List of namespaces for iterator objects
     * @param InflectorInterface $inflector  Inflector used to resolve class names
     */
    public function __construct($namespaces = array(), InflectorInterface $inflector = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Registers a namespace to check for Iterators
     *
     * @param string $namespace Namespace which contains Iterator classes
     *
     * @return self
     */
    public function registerNamespace($namespace)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getClassName(CommandInterface $command)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
