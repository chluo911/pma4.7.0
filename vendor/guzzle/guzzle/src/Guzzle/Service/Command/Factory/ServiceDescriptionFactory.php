<?php

namespace Guzzle\Service\Command\Factory;

use Guzzle\Service\Description\ServiceDescriptionInterface;
use Guzzle\Inflection\InflectorInterface;

/**
 * Command factory used to create commands based on service descriptions
 */
class ServiceDescriptionFactory implements FactoryInterface
{
    /** @var ServiceDescriptionInterface */
    protected $description;

    /** @var InflectorInterface */
    protected $inflector;

    /**
     * @param ServiceDescriptionInterface $description Service description
     * @param InflectorInterface          $inflector   Optional inflector to use if the command is not at first found
     */
    public function __construct(ServiceDescriptionInterface $description, InflectorInterface $inflector = null)
    {
        $this->setServiceDescription($description);
        $this->inflector = $inflector;
    }

    /**
     * Change the service description used with the factory
     *
     * @param ServiceDescriptionInterface $description Service description to use
     *
     * @return FactoryInterface
     */
    public function setServiceDescription(ServiceDescriptionInterface $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Returns the service description
     *
     * @return ServiceDescriptionInterface
     */
    public function getServiceDescription()
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
