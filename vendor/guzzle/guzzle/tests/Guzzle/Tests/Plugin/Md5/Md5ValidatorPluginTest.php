<?php

namespace Guzzle\Tests\Plugin\Md5;

use Guzzle\Http\EntityBody;
use Guzzle\Http\Message\RequestFactory;
use Guzzle\Http\Message\Response;
use Guzzle\Plugin\Md5\Md5ValidatorPlugin;

/**
 * @covers Guzzle\Plugin\Md5\Md5ValidatorPlugin
 */
class Md5ValidatorPluginTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testValidatesMd5()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testThrowsExceptionOnInvalidMd5()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSkipsWhenContentLengthIsTooLarge()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testProperlyValidatesWhenUsingContentEncoding()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
