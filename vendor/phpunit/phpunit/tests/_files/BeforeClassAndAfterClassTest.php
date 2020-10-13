<?php
class BeforeClassAndAfterClassTest extends PHPUnit_Framework_TestCase
{
    public static $beforeClassWasRun = 0;
    public static $afterClassWasRun  = 0;

    public static function resetProperties()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @beforeClass
     */
    public static function initialClassSetup()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @afterClass
     */
    public static function finalClassTeardown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function test1()
    {
    }
    public function test2()
    {
    }
}
