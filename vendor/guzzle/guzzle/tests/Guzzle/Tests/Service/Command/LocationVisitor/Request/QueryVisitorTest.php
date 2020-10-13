<?php

namespace Guzzle\Tests\Service\Command\LocationVisitor\Request;

use Guzzle\Service\Command\LocationVisitor\Request\QueryVisitor as Visitor;

/**
 * @covers Guzzle\Service\Command\LocationVisitor\Request\QueryVisitor
 */
class QueryVisitorTest extends AbstractVisitorTestCase
{
    public function testVisitsLocation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Guzzle\Service\Command\LocationVisitor\Request\QueryVisitor
     * @covers Guzzle\Service\Command\LocationVisitor\Request\AbstractRequestVisitor::resolveRecursively
     */
    public function testRecursivelyBuildsQueryStrings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers Guzzle\Service\Command\LocationVisitor\Request\AbstractRequestVisitor::resolveRecursively
     */
    public function testFiltersAreAppliedToArrayParamType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
