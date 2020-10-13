<?php
class TestWithTest extends PHPUnit_Framework_TestCase
{
    /**
     * @testWith [0, 0, 0]
     *           [0, 1, 1]
     *           [1, 2, 3]
     *           [20, 22, 42]
     */
    public function testAdd($a, $b, $c)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function providerMethod()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
