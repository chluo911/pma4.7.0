<?php

namespace Guzzle\Tests\Http;

use Guzzle\Http\QueryString;
use Guzzle\Http\QueryAggregator\PhpAggregator as Ag;

class PhpAggregatorTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testEncodes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
