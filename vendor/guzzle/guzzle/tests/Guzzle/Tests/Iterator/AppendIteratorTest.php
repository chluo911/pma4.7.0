<?php

namespace Guzzle\Tests\Iterator;

use Guzzle\Iterator\AppendIterator;

/**
 * @covers Guzzle\Iterator\AppendIterator
 */
class AppendIteratorTest extends \PHPUnit_Framework_TestCase
{
    public function testTraversesIteratorsInOrder()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
