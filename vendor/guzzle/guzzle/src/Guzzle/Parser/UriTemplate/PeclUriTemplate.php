<?php

namespace Guzzle\Parser\UriTemplate;

use Guzzle\Common\Exception\RuntimeException;

/**
 * Expands URI templates using the uri_template pecl extension (pecl install uri_template-beta)
 *
 * @link http://pecl.php.net/package/uri_template
 * @link https://github.com/ioseb/uri-template
 */
class PeclUriTemplate implements UriTemplateInterface
{
    public function __construct()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function expand($template, array $variables)
    {
        return uri_template($template, $variables);
    }
}
