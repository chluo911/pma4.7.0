<?php

namespace Guzzle\Tests\Log;

use Guzzle\Log\ArrayLogAdapter;

class ArrayLogAdapterTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testLog()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testClearLog()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
