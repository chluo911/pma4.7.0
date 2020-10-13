<?php
class Issue797Test extends PHPUnit_Framework_TestCase
{
    protected $preserveGlobalState = false;

    public function testBootstrapPhpIsExecutedInIsolation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
