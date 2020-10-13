<?php

namespace Guzzle\Plugin\Log;

use Guzzle\Common\Event;
use Guzzle\Log\LogAdapterInterface;
use Guzzle\Log\MessageFormatter;
use Guzzle\Log\ClosureLogAdapter;
use Guzzle\Http\EntityBody;
use Guzzle\Http\Message\EntityEnclosingRequestInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Plugin class that will add request and response logging to an HTTP request.
 *
 * The log plugin uses a message formatter that allows custom messages via template variable substitution.
 *
 * @see MessageLogger for a list of available log template variable substitutions
 */
class LogPlugin implements EventSubscriberInterface
{
    /** @var LogAdapterInterface Adapter responsible for writing log data */
    protected $logAdapter;

    /** @var MessageFormatter Formatter used to format messages before logging */
    protected $formatter;

    /** @var bool Whether or not to wire request and response bodies */
    protected $wireBodies;

    /**
     * @param LogAdapterInterface     $logAdapter Adapter object used to log message
     * @param string|MessageFormatter $formatter  Formatter used to format log messages or the formatter template
     * @param bool                    $wireBodies Set to true to track request and response bodies using a temporary
     *                                            buffer if the bodies are not repeatable.
     */
    public function __construct(
        LogAdapterInterface $logAdapter,
        $formatter = null,
        $wireBodies = false
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get a log plugin that outputs full request, response, and curl error information to stderr
     *
     * @param bool     $wireBodies Set to false to disable request/response body output when they use are not repeatable
     * @param resource $stream     Stream to write to when logging. Defaults to STDERR when it is available
     *
     * @return self
     */
    public static function getDebugPlugin($wireBodies = true, $stream = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getSubscribedEvents()
    {
        return array(
            'curl.callback.write' => array('onCurlWrite', 255),
            'curl.callback.read'  => array('onCurlRead', 255),
            'request.before_send' => array('onRequestBeforeSend', 255),
            'request.sent'        => array('onRequestSent', 255)
        );
    }

    /**
     * Event triggered when curl data is read from a request
     *
     * @param Event $event
     */
    public function onCurlRead(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Event triggered when curl data is written to a response
     *
     * @param Event $event
     */
    public function onCurlWrite(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Called before a request is sent
     *
     * @param Event $event
     */
    public function onRequestBeforeSend(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Triggers the actual log write when a request completes
     *
     * @param Event $event
     */
    public function onRequestSent(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
