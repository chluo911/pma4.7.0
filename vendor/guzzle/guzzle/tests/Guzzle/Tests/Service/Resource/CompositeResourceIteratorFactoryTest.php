<?php

namespace Guzzle\Tests\Service\Resource;

use Guzzle\Service\Resource\CompositeResourceIteratorFactory;
use Guzzle\Service\Resource\ResourceIteratorClassFactory;
use Guzzle\Tests\Service\Mock\Command\MockCommand;

/**
 * @covers Guzzle\Service\Resource\CompositeResourceIteratorFactory
 */
class CompositeResourceIteratorFactoryTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Iterator was not found for mock_command
     */
    public function testEnsuresIteratorClassExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testBuildsResourceIterators()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
