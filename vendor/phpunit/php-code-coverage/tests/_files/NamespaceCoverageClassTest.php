<?php
class NamespaceCoverageClassTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers Foo\CoveredClass
     */
    public function testSomething()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
