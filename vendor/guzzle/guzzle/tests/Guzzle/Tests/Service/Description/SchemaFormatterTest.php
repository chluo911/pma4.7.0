<?php

namespace Guzzle\Tests\Service\Description;

use Guzzle\Service\Description\SchemaFormatter;

/**
 * @covers Guzzle\Service\Description\SchemaFormatter
 */
class SchemaFormatterTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function dateTimeProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider dateTimeProvider
     */
    public function testFilters($value, $format, $result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \Guzzle\Common\Exception\InvalidArgumentException
     */
    public function testValidatesDateTimeInput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testEnsuresTimestampsAreIntegers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
