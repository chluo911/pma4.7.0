<?php

namespace Guzzle\Tests\Service\Command\LocationVisitor\Response;

use Guzzle\Service\Description\Parameter;
use Guzzle\Http\Message\Response;
use Guzzle\Service\Command\LocationVisitor\Response\StatusCodeVisitor as Visitor;

/**
 * @covers Guzzle\Service\Command\LocationVisitor\Response\StatusCodeVisitor
 */
class StatusCodeVisitorTest extends AbstractResponseVisitorTest
{
    public function testVisitsLocation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
