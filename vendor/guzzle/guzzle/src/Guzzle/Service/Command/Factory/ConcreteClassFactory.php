<?php

namespace Guzzle\Service\Command\Factory;

use Guzzle\Inflection\InflectorInterface;
use Guzzle\Inflection\Inflector;
use Guzzle\Service\ClientInterface;

/**
 * Command factory used to create commands referencing concrete command classes
 */
class ConcreteClassFactory implements FactoryInterface
{
    /** @var ClientInterface */
    protected $client;

    /** @var InflectorInterface */
    protected $inflector;

    /**
     * @param ClientInterface    $client    Client that owns the commands
     * @param InflectorInterface $inflector Inflector used to resolve class names
     */
    public function __construct(ClientInterface $client, InflectorInterface $inflector = null)
    {
        $this->client = $client;
        $this->inflector = $inflector ?: Inflector::getDefault();
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
