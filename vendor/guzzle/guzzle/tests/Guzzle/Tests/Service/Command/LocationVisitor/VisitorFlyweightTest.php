<?php

namespace Guzzle\Tests\Service\Command;

use Guzzle\Service\Command\LocationVisitor\VisitorFlyweight;
use Guzzle\Service\Command\LocationVisitor\Request\JsonVisitor as JsonRequestVisitor;
use Guzzle\Service\Command\LocationVisitor\Response\JsonVisitor as JsonResponseVisitor;

/**
 * @covers Guzzle\Service\Command\LocationVisitor\VisitorFlyweight
 */
class VisitorFlyweightTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testUsesDefaultMappingsWithGetInstance()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanUseCustomMappings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage No request visitor has been mapped for foo
     */
    public function testThrowsExceptionWhenRetrievingUnknownVisitor()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCachesVisitors()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAllowsAddingVisitors()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
