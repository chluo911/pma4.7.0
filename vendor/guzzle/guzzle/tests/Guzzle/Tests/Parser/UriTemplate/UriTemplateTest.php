<?php

namespace Guzzle\Tests\Parsers\UriTemplate;

use Guzzle\Parser\UriTemplate\UriTemplate;

/**
 * @covers Guzzle\Parser\UriTemplate\UriTemplate
 */
class UriTemplateTest extends AbstractUriTemplateTest
{
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

    public function expressionProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider expressionProvider
     */
    public function testParsesExpressions($exp, $data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @ticket https://github.com/guzzle/guzzle/issues/90
     */
    public function testAllowsNestedArrayExpansion()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @ticket https://github.com/guzzle/guzzle/issues/426
     */
    public function testSetRegex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
