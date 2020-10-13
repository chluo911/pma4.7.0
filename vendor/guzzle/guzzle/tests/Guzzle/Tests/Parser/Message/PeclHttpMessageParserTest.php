<?php

namespace Guzzle\Tests\Parser\Message;

use Guzzle\Parser\Message\PeclHttpMessageParser;

/**
 * @covers Guzzle\Parser\Message\PeclHttpMessageParser
 */
class PeclHttpMessageParserTest extends MessageParserProvider
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider requestProvider
     */
    public function testParsesRequests($message, $parts)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider responseProvider
     */
    public function testParsesResponses($message, $parts)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
