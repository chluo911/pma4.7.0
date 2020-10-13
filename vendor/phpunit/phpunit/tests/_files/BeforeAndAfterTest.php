<?php
class BeforeAndAfterTest extends PHPUnit_Framework_TestCase
{
    public static $beforeWasRun;
    public static $afterWasRun;

    public static function resetProperties()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @before
     */
    public function initialSetup()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @after
     */
    public function finalTeardown()
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
