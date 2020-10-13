<?php

namespace Guzzle\Plugin\Backoff;

use Guzzle\Common\Event;
use Guzzle\Common\AbstractHasDispatcher;
use Guzzle\Http\Message\EntityEnclosingRequestInterface;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Curl\CurlMultiInterface;
use Guzzle\Http\Exception\CurlException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Plugin to automatically retry failed HTTP requests using a backoff strategy
 */
class BackoffPlugin extends AbstractHasDispatcher implements EventSubscriberInterface
{
    const DELAY_PARAM = CurlMultiInterface::BLOCKING;
    const RETRY_PARAM = 'plugins.backoff.retry_count';
    const RETRY_EVENT = 'plugins.backoff.retry';

    /** @var BackoffStrategyInterface Backoff strategy */
    protected $strategy;

    /**
     * @param BackoffStrategyInterface $strategy The backoff strategy used to determine whether or not to retry and
     *                                           the amount of delay between retries.
     */
    public function __construct(BackoffStrategyInterface $strategy = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Retrieve a basic truncated exponential backoff plugin that will retry HTTP errors and cURL errors
     *
     * @param int   $maxRetries Maximum number of retries
     * @param array $httpCodes  HTTP response codes to retry
     * @param array $curlCodes  cURL error codes to retry
     *
     * @return self
     */
    public static function getExponentialBackoff(
        $maxRetries = 3,
        array $httpCodes = null,
        array $curlCodes = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getAllEvents()
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
            'request.sent'      => 'onRequestSent',
            'request.exception' => 'onRequestSent',
            CurlMultiInterface::POLLING_REQUEST => 'onRequestPoll'
        );
    }

    /**
     * Called when a request has been sent  and isn't finished processing
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

    /**
     * Called when a request is polling in the curl multi object
     *
     * @param Event $event
     */
    public function onRequestPoll(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
