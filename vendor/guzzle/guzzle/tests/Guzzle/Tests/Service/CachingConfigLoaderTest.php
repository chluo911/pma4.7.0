<?php

namespace Guzzle\Tests\Service;

use Guzzle\Cache\DoctrineCacheAdapter;
use Guzzle\Service\CachingConfigLoader;
use Doctrine\Common\Cache\ArrayCache;

/**
 * @covers Guzzle\Service\CachingConfigLoader
 */
class CachingConfigLoaderTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testLoadsPhpFileIncludes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDoesNotCacheArrays()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
