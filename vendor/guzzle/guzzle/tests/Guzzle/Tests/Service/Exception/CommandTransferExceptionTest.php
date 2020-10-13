<?php

namespace Guzzle\Tests\Service\Exception;

use Guzzle\Http\Exception\MultiTransferException;
use Guzzle\Http\Message\Request;
use Guzzle\Service\Exception\CommandTransferException;
use Guzzle\Tests\Service\Mock\Command\MockCommand;

/**
 * @covers Guzzle\Service\Exception\CommandTransferException
 */
class CommandTransferExceptionTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testStoresCommands()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testConvertsMultiExceptionIntoCommandTransfer()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanRetrieveExceptionForCommand()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAddsNonRequestExceptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
