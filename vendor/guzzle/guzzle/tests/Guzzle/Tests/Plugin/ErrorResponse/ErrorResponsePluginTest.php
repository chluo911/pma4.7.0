<?php

namespace Guzzle\Tests\Plugin\ErrorResponse;

use Guzzle\Service\Client;
use Guzzle\Http\Message\Response;
use Guzzle\Plugin\ErrorResponse\ErrorResponsePlugin;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Tests\Mock\ErrorResponseMock;

/**
 * @covers \Guzzle\Plugin\ErrorResponse\ErrorResponsePlugin
 */
class ErrorResponsePluginTest extends \Guzzle\Tests\GuzzleTestCase
{
    protected $client;

    public static function tearDownAfterClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \Guzzle\Http\Exception\ServerErrorResponseException
     */
    public function testSkipsWhenErrorResponsesIsNotSet()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSkipsWhenErrorResponsesIsNotSetAndAllowsSuccess()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \Guzzle\Plugin\ErrorResponse\Exception\ErrorResponseException
     * @expectedExceptionMessage Does\Not\Exist does not exist
     */
    public function testEnsuresErrorResponseExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \Guzzle\Plugin\ErrorResponse\Exception\ErrorResponseException
     * @expectedExceptionMessage must implement Guzzle\Plugin\ErrorResponse\ErrorResponseExceptionInterface
     */
    public function testEnsuresErrorResponseImplementsInterface()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testThrowsSpecificErrorResponseOnMatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \Guzzle\Tests\Mock\ErrorResponseMock
     */
    public function testThrowsWhenCodeAndPhraseMatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSkipsWhenReasonDoesNotMatch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testSkipsWhenNoClassIsSet()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
