<?php

namespace Guzzle\Tests\Service\Command\LocationVisitor\Response;

use Guzzle\Service\Description\Parameter;
use Guzzle\Http\Message\Response;
use Guzzle\Service\Command\LocationVisitor\Response\BodyVisitor as Visitor;

/**
 * @covers Guzzle\Service\Command\LocationVisitor\Response\BodyVisitor
 */
class BodyVisitorTest extends AbstractResponseVisitorTest
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
