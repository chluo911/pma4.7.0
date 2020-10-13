<?php

namespace Guzzle\Tests\Service\Command;

use Guzzle\Service\Client;
use Guzzle\Service\Command\Factory\AliasFactory;
use Guzzle\Service\Command\Factory\MapFactory;
use Guzzle\Service\Command\Factory\CompositeFactory;

/**
 * @covers Guzzle\Service\Command\Factory\AliasFactory
 */
class AliasFactoryTest extends \Guzzle\Tests\GuzzleTestCase
{
    private $factory;
    private $client;

    public function setup()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function aliasProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider aliasProvider
     */
    public function testAliasesCommands($key, $result, $exception)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
