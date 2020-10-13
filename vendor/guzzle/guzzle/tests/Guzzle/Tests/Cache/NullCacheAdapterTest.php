<?php

namespace Guzzle\Tests\Common\Cache;

use Guzzle\Cache\NullCacheAdapter;

/**
 * @covers Guzzle\Cache\NullCacheAdapter
 */
class NullCacheAdapterTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testNullCacheAdapter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
