<?php
abstract class AbstractMockTestClass implements MockTestInterface
{
    abstract public function doSomething();

    public function returnAnything()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
