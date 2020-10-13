<?php

namespace Guzzle\Parser\Message;

/**
 * Pecl HTTP message parser
 */
class PeclHttpMessageParser extends AbstractMessageParser
{
    public function parseRequest($message)
    {
        if (!$message) {
            return false;
        }

        $parts = http_parse_message($message);

        $parsed = array(
            'method'   => $parts->requestMethod,
            'protocol' => 'HTTP',
            'version'  => number_format($parts->httpVersion, 1),
            'headers'  => $parts->headers,
            'body'     => $parts->body
        );

        $parsed['request_url'] = $this->getUrlPartsFromMessage($parts->requestUrl, $parsed);

        return $parsed;
    }

    public function parseResponse($message)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
