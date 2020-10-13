<?php

namespace Guzzle\Tests\Parsers\UriTemplate;

use Guzzle\Parser\UriTemplate\PeclUriTemplate;

/**
 * @covers Guzzle\Parser\UriTemplate\PeclUriTemplate
 */
class PeclUriTemplateTest extends AbstractUriTemplateTest
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
     * @dataProvider templateProvider
     */
    public function testExpandsUriTemplates($template, $expansion, $params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
