<?php
class IncompleteTest extends PHPUnit_Framework_TestCase
{
    public function testIncomplete()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
