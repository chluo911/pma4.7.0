<?php
require_once 'ChildSuite.php';

class ParentSuite
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
