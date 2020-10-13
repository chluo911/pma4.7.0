<?php

namespace Guzzle\Tests\Service\Command\LocationVisitor\Request;

use Guzzle\Service\Command\LocationVisitor\Request\ResponseBodyVisitor as Visitor;

/**
 * @covers Guzzle\Service\Command\LocationVisitor\Request\ResponseBodyVisitor
 */
class ResponseBodyVisitorTest extends AbstractVisitorTestCase
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
