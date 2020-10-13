<?php

namespace Guzzle\Tests\Plugin\Cache;

use Guzzle\Http\Client;
use Guzzle\Http\ClientInterface;
use Guzzle\Http\Exception\BadResponseException;
use Guzzle\Http\Exception\CurlException;
use Guzzle\Http\Message\Request;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Message\RequestFactory;
use Guzzle\Plugin\Cache\CachePlugin;
use Guzzle\Cache\DoctrineCacheAdapter;
use Doctrine\Common\Cache\ArrayCache;
use Guzzle\Plugin\Cache\DefaultCacheStorage;
use Guzzle\Plugin\Mock\MockPlugin;
use Guzzle\Tests\Http\Server;

/**
 * @covers Guzzle\Plugin\Cache\DefaultRevalidation
 * @group server
 */
class DefaultRevalidationTest extends \Guzzle\Tests\GuzzleTestCase
{
    protected function getHttpDate($time)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Data provider to test cache revalidation
     *
     * @return array
     */
    public function cacheRevalidationDataProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider cacheRevalidationDataProvider
     */
    public function testRevalidatesResponsesAgainstOriginServer($can, $request, $response, $validate = null, $result = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testHandles404RevalidationResponses()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanRevalidateWithPlugin()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanHandleRevalidationFailures()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCanHandleStaleIfErrorWhenRevalidating()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @group issue-437
     */
    public function testDoesNotTouchClosureListeners()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
