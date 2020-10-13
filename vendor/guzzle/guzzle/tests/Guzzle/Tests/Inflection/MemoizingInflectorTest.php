<?php

namespace Guzzle\Tests\Inflection;

use Guzzle\Inflection\MemoizingInflector;
use Guzzle\Inflection\Inflector;

/**
 * @covers Guzzle\Inflection\MemoizingInflector
 */
class MemoizingInflectorTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testUsesCache()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testProtectsAgainstCacheOverflow()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
