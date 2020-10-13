<?php
class Issue581Test extends PHPUnit_Framework_TestCase
{
    public function testExportingObjectsDoesNotBreakWindowsLineFeeds()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
