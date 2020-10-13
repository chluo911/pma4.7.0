<?php

class BaseTestListenerSample extends PHPUnit_Framework_BaseTestListener
{
    public $endCount = 0;

    public function endTest(PHPUnit_Framework_Test $test, $time)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
