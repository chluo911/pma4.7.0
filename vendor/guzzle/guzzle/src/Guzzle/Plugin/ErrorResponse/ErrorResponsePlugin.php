<?php

namespace Guzzle\Plugin\ErrorResponse;

use Guzzle\Common\Event;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Service\Command\CommandInterface;
use Guzzle\Service\Description\Operation;
use Guzzle\Plugin\ErrorResponse\Exception\ErrorResponseException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Converts generic Guzzle response exceptions into errorResponse exceptions
 */
class ErrorResponsePlugin implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array('command.before_send' => array('onCommandBeforeSend', -1));
    }

    /**
     * Adds a listener to requests before they sent from a command
     *
     * @param Event $event Event emitted
     */
    public function onCommandBeforeSend(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param RequestInterface $request   Request that received an error
     * @param CommandInterface $command   Command that created the request
     * @param Operation        $operation Operation that defines the request and errors
     *
     * @return \Closure Returns a closure
     * @throws ErrorResponseException
     */
    protected function getErrorClosure(RequestInterface $request, CommandInterface $command, Operation $operation)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
