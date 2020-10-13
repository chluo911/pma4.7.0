<?php

namespace Guzzle\Service\Command\LocationVisitor\Request;

use Guzzle\Http\EntityBody;
use Guzzle\Http\Message\EntityEnclosingRequestInterface;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\EntityBodyInterface;
use Guzzle\Service\Command\CommandInterface;
use Guzzle\Service\Description\Parameter;

/**
 * Visitor used to apply a body to a request
 *
 * This visitor can use a data parameter of 'expect' to control the Expect header. Set the expect data parameter to
 * false to disable the expect header, or set the value to an integer so that the expect 100-continue header is only
 * added if the Content-Length of the entity body is greater than the value.
 */
class BodyVisitor extends AbstractRequestVisitor
{
    public function visit(CommandInterface $command, RequestInterface $request, Parameter $param, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add the appropriate expect header to a request
     *
     * @param EntityEnclosingRequestInterface $request Request to update
     * @param EntityBodyInterface             $body    Entity body of the request
     * @param string|int                      $expect  Expect header setting
     */
    protected function addExpectHeader(EntityEnclosingRequestInterface $request, EntityBodyInterface $body, $expect)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
