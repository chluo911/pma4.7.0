<?php

namespace Guzzle\Tests\Iterator;

use Guzzle\Iterator\MapIterator;

/**
 * @covers Guzzle\Iterator\MapIterator
 */
class MapIteratorTest extends \PHPUnit_Framework_TestCase
{
    public function testFiltersValues()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testValidatesCallable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
