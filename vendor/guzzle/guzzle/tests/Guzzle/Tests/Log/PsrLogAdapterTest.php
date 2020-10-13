<?php

namespace Guzzle\Tests\Log;

use Guzzle\Log\PsrLogAdapter;
use Monolog\Logger;
use Monolog\Handler\TestHandler;

/**
 * @covers Guzzle\Log\PsrLogAdapter
 * @covers Guzzle\Log\AbstractLogAdapter
 */
class PsrLogAdapterTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testLogsMessagesToAdaptedObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
