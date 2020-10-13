<?php

namespace Guzzle\Plugin\Async;

use Guzzle\Common\Event;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Exception\CurlException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Sends requests but does not wait for the response
 */
class AsyncPlugin implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'request.before_send'    => 'onBeforeSend',
            'request.exception'      => 'onRequestTimeout',
            'request.sent'           => 'onRequestSent',
            'curl.callback.progress' => 'onCurlProgress'
        );
    }

    /**
     * Event used to ensure that progress callback are emitted from the curl handle's request mediator.
     *
     * @param Event $event
     */
    public function onBeforeSend(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Event emitted when a curl progress function is called. When the amount of data uploaded == the amount of data to
     * upload OR any bytes have been downloaded, then time the request out after 1ms because we're done with
     * transmitting the request, and tell curl not download a body.
     *
     * @param Event $event
     */
    public function onCurlProgress(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Event emitted when a curl exception occurs. Ignore the exception and set a mock response.
     *
     * @param Event $event
     */
    public function onRequestTimeout(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Event emitted when a request completes because it took less than 1ms. Add an X-Guzzle-Async header to notify the
     * caller that there is no body in the message.
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
