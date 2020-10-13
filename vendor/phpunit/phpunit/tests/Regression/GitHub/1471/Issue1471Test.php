<?php
class Issue1471Test extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
