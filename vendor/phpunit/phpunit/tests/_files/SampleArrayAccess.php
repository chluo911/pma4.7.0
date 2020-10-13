<?php
/**
 * Sample class that implements ArrayAccess copied from
 * http://www.php.net/manual/en/class.arrayaccess.php
 * with some minor changes
 * This class required for PHPUnit_Framework_Constraint_ArrayHasKey testing
 */
class SampleArrayAccess implements ArrayAccess
{
    private $container;

    public function __construct()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public function offsetSet($offset, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public function offsetExists($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    public function offsetGet($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
