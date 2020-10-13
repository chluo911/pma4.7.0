<?php

namespace Guzzle\Tests\Log;

use Guzzle\Log\Zf2LogAdapter;
use Zend\Log\Logger;
use Zend\Log\Writer\Stream;

/**
 * @covers Guzzle\Log\Zf2LogAdapter
 */
class Zf2LogAdapterTest extends \Guzzle\Tests\GuzzleTestCase
{
    /** @var Zf2LogAdapter */
    protected $adapter;

    /** @var Logger */
    protected $log;

    /** @var resource */
    protected $stream;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testLogsMessagesToAdaptedObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testExposesAdaptedLogObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
