<?php

namespace Guzzle\Tests\Service\Command\LocationVisitor\Request;

use Guzzle\Http\Message\EntityEnclosingRequest;
use Guzzle\Service\Description\Operation;
use Guzzle\Service\Description\Parameter;
use Guzzle\Service\Description\SchemaValidator;
use Guzzle\Service\Command\OperationCommand;
use Guzzle\Tests\Service\Mock\Command\MockCommand;
use Guzzle\Tests\Service\Mock\MockClient;

abstract class AbstractVisitorTestCase extends \Guzzle\Tests\GuzzleTestCase
{
    protected $command;
    protected $request;
    protected $param;
    protected $validator;

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getCommand($location)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getNestedCommand($location)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getCommandWithArrayParamAndFilters()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
