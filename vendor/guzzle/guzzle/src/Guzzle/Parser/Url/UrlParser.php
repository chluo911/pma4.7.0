<?php

namespace Guzzle\Parser\Url;

use Guzzle\Common\Version;

/**
 * Parses URLs into parts using PHP's built-in parse_url() function
 * @deprecated Just use parse_url. UTF-8 characters should be percent encoded anyways.
 * @codeCoverageIgnore
 */
class UrlParser implements UrlParserInterface
{
    /** @var bool Whether or not to work with UTF-8 strings */
    protected $utf8 = false;

    /**
     * Set whether or not to attempt to handle UTF-8 strings (still WIP)
     *
     * @param bool $utf8 Set to TRUE to handle UTF string
     */
    public function setUtf8Support($utf8)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function parseUrl($url)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
