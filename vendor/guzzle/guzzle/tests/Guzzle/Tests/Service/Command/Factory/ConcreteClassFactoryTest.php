<?php

namespace Guzzle\Tests\Service\Command;

use Guzzle\Tests\Service\Mock\MockClient;
use Guzzle\Service\Command\Factory\ConcreteClassFactory;

/**
 * @covers Guzzle\Service\Command\Factory\ConcreteClassFactory
 */
class ConcreteClassFactoryTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider testProvider
     */
    public function testCreatesConcreteCommands($key, $result, $prefix)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
