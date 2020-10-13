<?php

namespace Guzzle\Tests\Parser\Cookie;

use Guzzle\Parser\Cookie\CookieParser;

/**
 * @covers Guzzle\Parser\Cookie\CookieParser
 */
class CookieParserTest extends CookieParserProvider
{
    protected $cookieParserClass = 'Guzzle\Parser\Cookie\CookieParser';

    public function testUrlDecodesCookies()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
