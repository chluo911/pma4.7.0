<?php

namespace Guzzle\Tests\Plugin\Log;

use Guzzle\Log\ClosureLogAdapter;
use Guzzle\Http\Client;
use Guzzle\Http\EntityBody;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\Response;
use Guzzle\Plugin\Log\LogPlugin;
use Guzzle\Common\Event;

/**
 * @group server
 * @covers Guzzle\Plugin\Log\LogPlugin
 */
class LogPluginTest extends \Guzzle\Tests\GuzzleTestCase
{
    protected $adapter;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testIgnoresCurlEventsWhenNotWiringBodies()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testLogsWhenComplete()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testWiresBodiesWhenNeeded()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testHasHelpfulStaticFactoryMethod()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
