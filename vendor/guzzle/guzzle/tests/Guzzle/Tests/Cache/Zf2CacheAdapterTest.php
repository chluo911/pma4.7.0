<?php

namespace Guzzle\Tests\Cache;

use Guzzle\Cache\Zf2CacheAdapter;
use Zend\Cache\StorageFactory;

/**
 * @covers Guzzle\Cache\Zf2CacheAdapter
 */
class Zf2CacheAdapterTest extends \Guzzle\Tests\GuzzleTestCase
{
    private $cache;
    private $adapter;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCachesDataUsingCallables()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testChecksIfCacheContainsKeys()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDeletesFromCacheByKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
