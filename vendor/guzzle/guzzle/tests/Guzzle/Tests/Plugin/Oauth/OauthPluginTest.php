<?php

namespace Guzzle\Tests\Plugin\Oauth;

use Guzzle\Http\Message\RequestFactory;
use Guzzle\Http\QueryAggregator\CommaAggregator;
use Guzzle\Plugin\Oauth\OauthPlugin;
use Guzzle\Common\Event;

/**
 * @covers Guzzle\Plugin\Oauth\OauthPlugin
 */
class OauthPluginTest extends \Guzzle\Tests\GuzzleTestCase
{
    const TIMESTAMP = '1327274290';
    const NONCE = 'e7aa11195ca58349bec8b5ebe351d3497eb9e603';

    protected $config = array(
        'consumer_key'    => 'foo',
        'consumer_secret' => 'bar',
        'token'           => 'count',
        'token_secret'    => 'dracula'
    );

    protected function getRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSubscribesToEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAcceptsConfigurationData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCreatesStringToSignFromPostRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCreatesStringToSignIgnoringPostFields()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCreatesStringToSignFromPostRequestWithCustomContentType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testCreatesStringToSignFromPostRequest
     */
    public function testConvertsBooleansToStrings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCreatesStringToSignFromPostRequestWithNullValues()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testCreatesStringToSignFromPostRequest
     */
    public function testMultiDimensionalArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testMultiDimensionalArray
     */
    public function testMultiDimensionalArrayWithNonDefaultQueryAggregator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testCreatesStringToSignFromPostRequest
     */
    public function testSignsStrings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Test that the Oauth is signed correctly and that extra strings haven't been added
     * to the authorization header.
     */
    public function testSignsOauthRequests()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSignsOauthQueryStringRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidArgumentExceptionOnMethodError()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDoesNotAddFalseyValuesToAuthorization()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testOptionalOauthParametersAreNotAutomaticallyAdded()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
