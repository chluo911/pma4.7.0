<?php

namespace Guzzle\Parser\Cookie;

/**
 * Default Guzzle implementation of a Cookie parser
 */
class CookieParser implements CookieParserInterface
{
    /** @var array Cookie part names to snake_case array values */
    protected static $cookieParts = array(
        'domain'      => 'Domain',
        'path'        => 'Path',
        'max_age'     => 'Max-Age',
        'expires'     => 'Expires',
        'version'     => 'Version',
        'secure'      => 'Secure',
        'port'        => 'Port',
        'discard'     => 'Discard',
        'comment'     => 'Comment',
        'comment_url' => 'Comment-Url',
        'http_only'   => 'HttpOnly'
    );

    public function parseCookie($cookie, $host = null, $path = null, $decode = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get default cookie path according to RFC 6265
     * http://tools.ietf.org/search/rfc6265#section-5.1.4 Paths and Path-Match
     *
     * @param string $path Request uri-path
     *
     * @return string
     */
    protected function getDefaultPath($path)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
