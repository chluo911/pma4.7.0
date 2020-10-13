<?php

namespace Guzzle\Tests\Parser;

use Guzzle\Parser\ParserRegistry;

/**
 * @covers Guzzle\Parser\ParserRegistry
 */
class ParserRegistryTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testStoresObjects()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testReturnsNullWhenNotFound()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testReturnsLazyLoadedDefault()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
