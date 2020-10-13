<?php

namespace Guzzle\Tests\Plugin\Cookie\CookieJar;

use Guzzle\Plugin\Cookie\Cookie;
use Guzzle\Plugin\Cookie\CookieJar\FileCookieJar;

/**
 * @covers Guzzle\Plugin\Cookie\CookieJar\FileCookieJar
 */
class FileCookieJarTest extends \Guzzle\Tests\GuzzleTestCase
{
    private $file;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testLoadsFromFileFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testPersistsToFileFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
