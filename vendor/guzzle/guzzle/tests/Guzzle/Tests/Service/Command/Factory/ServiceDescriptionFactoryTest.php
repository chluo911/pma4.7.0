<?php

namespace Guzzle\Tests\Service\Command;

use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Command\Factory\ServiceDescriptionFactory;
use Guzzle\Inflection\Inflector;

/**
 * @covers Guzzle\Service\Command\Factory\ServiceDescriptionFactory
 */
class ServiceDescriptionFactoryTest extends \Guzzle\Tests\GuzzleTestCase
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
    public function testCreatesCommandsUsingServiceDescriptions($key, $result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUsesUcFirstIfNoExactMatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUsesInflectionIfNoExactMatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getDescription()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
