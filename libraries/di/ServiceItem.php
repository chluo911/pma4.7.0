<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Holds the PMA\libraries\di\ServiceItem class
 *
 * @package PMA
 */
namespace PMA\libraries\di;

/**
 * Service manager
 *
 * @package PMA\libraries\di
 */
class ServiceItem extends ReflectorItem
{

    /** @var mixed */
    protected $instance;

    /**
     * Get the instance of the service
     *
     * @param array $params Parameters
     * @return mixed
     */
    public function get($params = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
