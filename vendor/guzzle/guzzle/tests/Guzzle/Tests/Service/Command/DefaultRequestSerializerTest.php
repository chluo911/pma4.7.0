<?php

namespace Guzzle\Tests\Service\Command;

use Guzzle\Service\Command\DefaultRequestSerializer;
use Guzzle\Http\Message\EntityEnclosingRequest;
use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Guzzle\Service\Description\Operation;
use Guzzle\Service\Description\Parameter;
use Guzzle\Service\Command\LocationVisitor\Request\HeaderVisitor;
use Guzzle\Service\Command\LocationVisitor\VisitorFlyweight;

/**
 * @covers Guzzle\Service\Command\DefaultRequestSerializer
 */
class DefaultRequestSerializerTest extends \Guzzle\Tests\GuzzleTestCase
{
    /** @var EntityEnclosingRequest */
    protected $request;

    /** @var \Guzzle\Service\Command\AbstractCommand */
    protected $command;

    /** @var Client */
    protected $client;

    /** @var DefaultRequestSerializer */
    protected $serializer;

    /** @var Operation */
    protected $operation;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAllowsCustomVisitor()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUsesRelativePath()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testUsesRelativePathWithUriLocations()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAllowsCustomFactory()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testMixedParams()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testValidatesAdditionalParameters()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
