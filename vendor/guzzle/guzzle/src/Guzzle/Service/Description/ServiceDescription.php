<?php

namespace Guzzle\Service\Description;

use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Common\ToArrayInterface;

/**
 * A ServiceDescription stores service information based on a service document
 */
class ServiceDescription implements ServiceDescriptionInterface, ToArrayInterface
{
    /** @var array Array of {@see OperationInterface} objects */
    protected $operations = array();

    /** @var array Array of API models */
    protected $models = array();

    /** @var string Name of the API */
    protected $name;

    /** @var string API version */
    protected $apiVersion;

    /** @var string Summary of the API */
    protected $description;

    /** @var array Any extra API data */
    protected $extraData = array();

    /** @var ServiceDescriptionLoader Factory used in factory method */
    protected static $descriptionLoader;

    /** @var string baseUrl/basePath */
    protected $baseUrl;

    /**
     * {@inheritdoc}
     * @param string|array $config  File to build or array of operation information
     * @param array        $options Service description factory options
     *
     * @return self
     */
    public static function factory($config, array $options = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array $config Array of configuration data
     */
    public function __construct(array $config = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function serialize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function unserialize($json)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function toArray()
    {
        $result = array(
            'name'        => $this->name,
            'apiVersion'  => $this->apiVersion,
            'baseUrl'     => $this->baseUrl,
            'description' => $this->description
        ) + $this->extraData;
        $result['operations'] = array();
        foreach ($this->getOperations() as $name => $operation) {
            $result['operations'][$operation->getName() ?: $name] = $operation->toArray();
        }
        if (!empty($this->models)) {
            $result['models'] = array();
            foreach ($this->models as $id => $model) {
                $result['models'][$id] = $model instanceof Parameter ? $model->toArray(): $model;
            }
        }

        return array_filter($result);
    }

    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * Set the baseUrl of the description
     *
     * @param string $baseUrl Base URL of each operation
     *
     * @return self
     */
    public function setBaseUrl($baseUrl)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getOperations()
    {
        foreach (array_keys($this->operations) as $name) {
            $this->getOperation($name);
        }

        return $this->operations;
    }

    public function hasOperation($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getOperation($name)
    {
        // Lazily retrieve and build operations
        if (!isset($this->operations[$name])) {
            return null;
        }

        if (!($this->operations[$name] instanceof Operation)) {
            $this->operations[$name] = new Operation($this->operations[$name], $this);
        }

        return $this->operations[$name];
    }

    /**
     * Add a operation to the service description
     *
     * @param OperationInterface $operation Operation to add
     *
     * @return self
     */
    public function addOperation(OperationInterface $operation)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getModel($id)
    {
        if (!isset($this->models[$id])) {
            return null;
        }

        if (!($this->models[$id] instanceof Parameter)) {
            $this->models[$id] = new Parameter($this->models[$id] + array('name' => $id), $this);
        }

        return $this->models[$id];
    }

    public function getModels()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function hasModel($id)
    {
        return isset($this->models[$id]);
    }

    /**
     * Add a model to the service description
     *
     * @param Parameter $model Model to add
     *
     * @return self
     */
    public function addModel(Parameter $model)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getApiVersion()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getData($key)
    {
        return isset($this->extraData[$key]) ? $this->extraData[$key] : null;
    }

    public function setData($key, $value)
    {
        $this->extraData[$key] = $value;

        return $this;
    }

    /**
     * Initialize the state from an array
     *
     * @param array $config Configuration data
     * @throws InvalidArgumentException
     */
    protected function fromArray(array $config)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
