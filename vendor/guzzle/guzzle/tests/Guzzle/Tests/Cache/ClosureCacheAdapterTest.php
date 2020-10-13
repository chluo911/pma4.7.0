<?php

namespace Guzzle\Tests\Cache;

use Guzzle\Cache\ClosureCacheAdapter;

/**
 * @covers Guzzle\Cache\ClosureCacheAdapter
 */
class ClosureCacheAdapterTest extends \Guzzle\Tests\GuzzleTestCase
{
    /** @var ClosureCacheAdapter */
    private $adapter;

    /** Array of callables to use for testing */
    private $callables;

    /** Cache data for testing */
    public $data = array();

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

    /**
     * @expectedException InvalidArgumentException
     */
    public function testEnsuresCallablesArePresent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAllCallablesMustBePresent()
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
