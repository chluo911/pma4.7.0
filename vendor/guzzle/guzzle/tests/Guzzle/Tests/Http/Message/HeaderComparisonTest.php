<?php

namespace Guzzle\Tests\Message;

use Guzzle\Common\Collection;
use Guzzle\Tests\Http\Message\HeaderComparison;

class HeaderComparisonTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function filterProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider filterProvider
     */
    public function testComparesHeaders($filters, $headers, $result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
