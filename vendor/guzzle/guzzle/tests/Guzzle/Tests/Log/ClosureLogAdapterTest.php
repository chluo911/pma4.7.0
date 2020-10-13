<?php

namespace Guzzle\Tests\Log;

use Guzzle\Log\ClosureLogAdapter;

/**
 * @covers Guzzle\Log\ClosureLogAdapter
 */
class ClosureLogAdapterTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testClosure()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testThrowsExceptionWhenNotCallable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
