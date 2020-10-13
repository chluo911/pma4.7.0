<?php

namespace Guzzle\Tests\Http;

use Guzzle\Http\EntityBody;

/**
 * @covers Guzzle\Http\AbstractEntityBodyDecorator
 */
class AbstractEntityBodyDecoratorTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testDecoratesEntityBody()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
