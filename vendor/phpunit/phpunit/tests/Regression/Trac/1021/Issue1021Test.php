<?php
class Issue1021Test extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider provider
     */
    public function testSomething($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testSomething
     */
    public function testSomethingElse()
    {
    }

    public function provider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
