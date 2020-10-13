<?php

namespace Guzzle\Tests\Service\Command;

use Guzzle\Service\Command\Factory\MapFactory;

/**
 * @covers Guzzle\Service\Command\Factory\MapFactory
 */
class MapFactoryTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function mapProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider mapProvider
     */
    public function testCreatesCommandsUsingMappings($key, $result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
