<?php

namespace Guzzle\Service\Command\LocationVisitor\Request;

use Guzzle\Common\Exception\InvalidArgumentException;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Service\Command\CommandInterface;
use Guzzle\Service\Description\Parameter;

/**
 * Visitor used to apply a parameter to a header value
 */
class HeaderVisitor extends AbstractRequestVisitor
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
     * Add a prefixed array of headers to the request
     *
     * @param RequestInterface $request Request to update
     * @param Parameter        $param   Parameter object
     * @param array            $value   Header array to add
     *
     * @throws InvalidArgumentException
     */
    protected function addPrefixedHeaders(RequestInterface $request, Parameter $param, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
