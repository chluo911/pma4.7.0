<?php

namespace Guzzle\Tests\Parser\Message;

use Guzzle\Parser\Message\MessageParser;

/**
 * @covers Guzzle\Parser\Message\AbstractMessageParser
 * @covers Guzzle\Parser\Message\MessageParser
 */
class MessageParserTest extends MessageParserProvider
{
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

    public function testParsesRequestsWithMissingProtocol()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testParsesRequestsWithMissingVersion()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testParsesResponsesWithMissingReasonPhrase()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
