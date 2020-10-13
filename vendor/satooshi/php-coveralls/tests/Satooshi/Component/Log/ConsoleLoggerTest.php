<?php

namespace Satooshi\Component\Log;

/**
 * @covers Satooshi\Component\Log\ConsoleLogger
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
class ConsoleLoggerTest extends \PHPUnit_Framework_TestCase
{
    protected function createAdapterMockWith($message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     */
    public function shouldWritelnToOutput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
