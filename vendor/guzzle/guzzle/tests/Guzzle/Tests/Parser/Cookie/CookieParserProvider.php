<?php

namespace Guzzle\Tests\Parser\Cookie;

use Guzzle\Http\Url;

/**
 * @covers Guzzle\Parser\Cookie\CookieParser
 */
class CookieParserProvider extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * Provides the parsed information from a cookie
     *
     * @return array
     */
    public function cookieParserDataProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider cookieParserDataProvider
     */
    public function testParseCookie($cookie, $parsed, $url = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
