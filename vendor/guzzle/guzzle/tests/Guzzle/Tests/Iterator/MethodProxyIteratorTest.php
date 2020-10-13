<?php

namespace Guzzle\Tests\Iterator;

use Guzzle\Iterator\MethodProxyIterator;
use Guzzle\Iterator\ChunkedIterator;

/**
 * @covers Guzzle\Iterator\MethodProxyIterator
 */
class MethodProxyIteratorTest extends \PHPUnit_Framework_TestCase
{
    public function testProxiesMagicCallsToInnermostIterator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUsesInnerIterator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
