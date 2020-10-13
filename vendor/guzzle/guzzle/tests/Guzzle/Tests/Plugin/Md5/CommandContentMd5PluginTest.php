<?php

namespace Guzzle\Tests\Plugin\Md5;

use Guzzle\Common\Event;
use Guzzle\Plugin\Md5\CommandContentMd5Plugin;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Client;

/**
 * @covers Guzzle\Plugin\Md5\CommandContentMd5Plugin
 */
class CommandContentMd5PluginTest extends \Guzzle\Tests\GuzzleTestCase
{
    protected function getClient()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testHasEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testValidatesMd5WhenParamExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDoesNothingWhenNoPayloadExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAddsValidationToResponsesOfContentMd5()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testIgnoresValidationWhenDisabled()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
