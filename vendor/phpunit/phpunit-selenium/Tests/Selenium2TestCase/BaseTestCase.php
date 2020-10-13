<?php
class Tests_Selenium2TestCase_BaseTestCase extends PHPUnit_Extensions_Selenium2TestCase
{
    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
