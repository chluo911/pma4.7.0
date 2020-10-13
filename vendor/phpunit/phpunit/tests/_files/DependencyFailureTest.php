<?php
class DependencyFailureTest extends PHPUnit_Framework_TestCase
{
    public function testOne()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {
    }

    /**
     * @depends testTwo
     */
    public function testThree()
    {
    }
}
