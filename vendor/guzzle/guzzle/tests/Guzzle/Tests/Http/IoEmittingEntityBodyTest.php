<?php

namespace Guzzle\Tests\Http;

use Guzzle\Http\EntityBody;
use Guzzle\Http\IoEmittingEntityBody;

/**
 * @covers Guzzle\Http\IoEmittingEntityBody
 */
class IoEmittingEntityBodyTest extends \Guzzle\Tests\GuzzleTestCase
{
    protected $body;
    protected $decorated;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testEmitsReadEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testEmitsWriteEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
