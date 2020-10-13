<?php
require_once 'OneTest.php';
require_once 'TwoTest.php';

class ChildSuite
{
    public static function suite()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
