<?php

namespace Guzzle\Inflection;

/**
 * Decorator used to add pre-computed inflection mappings to an inflector
 */
class PreComputedInflector implements InflectorInterface
{
    /** @var array Array of pre-computed inflections */
    protected $mapping = array(
        'snake' => array(),
        'camel' => array()
    );

    /** @var InflectorInterface Decorated inflector */
    protected $decoratedInflector;

    /**
     * @param InflectorInterface $inflector Inflector being decorated
     * @param array              $snake     Hash of pre-computed camel to snake
     * @param array              $camel     Hash of pre-computed snake to camel
     * @param bool               $mirror    Mirror snake and camel reflections
     */
    public function __construct(InflectorInterface $inflector, array $snake = array(), array $camel = array(), $mirror = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function snake($word)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Converts strings from snake_case to upper CamelCase
     *
     * @param string $word Value to convert into upper CamelCase
     *
     * @return string
     */
    public function camel($word)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
