<?php

namespace Guzzle\Tests\Plugin\Cache;

use Doctrine\Common\Cache\ArrayCache;
use Guzzle\Cache\DoctrineCacheAdapter;
use Guzzle\Common\Event;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\Response;
use Guzzle\Plugin\Cache\CachePlugin;
use Guzzle\Plugin\Cache\CallbackCanCacheStrategy;

/**
 * @covers Guzzle\Plugin\Cache\CallbackCanCacheStrategy
 */
class CallbackCanCacheStrategyTest extends \Guzzle\Tests\GuzzleTestCase
{
    /**
     * @expectedException \Guzzle\Common\Exception\InvalidArgumentException
     */
    public function testConstructorEnsuresCallbackIsCallable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUsesCallback()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * The following is a bit of an integration test to ensure that the CachePlugin honors a
     * custom can cache strategy.
     */
    public function testIntegrationWithCachePlugin()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
