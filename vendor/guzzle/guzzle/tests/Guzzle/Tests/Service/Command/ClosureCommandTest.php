<?php

namespace Guzzle\Tests\Service\Command;

use Guzzle\Http\Message\RequestFactory;
use Guzzle\Service\Command\ClosureCommand;
use Guzzle\Service\Client;

/**
 * @covers Guzzle\Service\Command\ClosureCommand
 */
class ClosureCommandTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage A closure must be passed in the parameters array
     */
    public function testConstructorValidatesClosure()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testExecutesClosure()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException UnexpectedValueException
     * @expectedExceptionMessage Closure command did not return a RequestInterface object
     */
    public function testMustReturnRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
