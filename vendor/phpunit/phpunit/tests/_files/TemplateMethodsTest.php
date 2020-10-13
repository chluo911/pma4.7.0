<?php
class TemplateMethodsTest extends PHPUnit_Framework_TestCase
{
    public static function setUpBeforeClass()
    {
        print __METHOD__ . "\n";
    }

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertPreConditions()
    {
        print __METHOD__ . "\n";
    }

    public function testOne()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testTwo()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertPostConditions()
    {
        print __METHOD__ . "\n";
    }

    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function tearDownAfterClass()
    {
        print __METHOD__ . "\n";
    }

    protected function onNotSuccessfulTest(Exception $e)
    {
        print __METHOD__ . "\n";
        throw $e;
    }
}
