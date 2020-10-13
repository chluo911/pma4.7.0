<?php
class CoverageProtectedTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers CoveredClass::<protected>
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
