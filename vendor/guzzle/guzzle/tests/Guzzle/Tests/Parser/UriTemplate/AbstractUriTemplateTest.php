<?php

namespace Guzzle\Tests\Parsers\UriTemplate;

abstract class AbstractUriTemplateTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @return array
     */
    public function templateProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
