<?php

namespace Guzzle\Http;

use Guzzle\Common\Event;
use Guzzle\Http\Exception\BadResponseException;
use Guzzle\Http\Url;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\RequestFactory;
use Guzzle\Http\Message\EntityEnclosingRequestInterface;
use Guzzle\Http\Exception\TooManyRedirectsException;
use Guzzle\Http\Exception\CouldNotRewindStreamException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Plugin to implement HTTP redirects. Can redirect like a web browser or using strict RFC 2616 compliance
 */
class RedirectPlugin implements EventSubscriberInterface
{
    const REDIRECT_COUNT = 'redirect.count';
    const MAX_REDIRECTS = 'redirect.max';
    const STRICT_REDIRECTS = 'redirect.strict';
    const PARENT_REQUEST = 'redirect.parent_request';
    const DISABLE = 'redirect.disable';

    /**
     * @var int Default number of redirects allowed when no setting is supplied by a request
     */
    protected $defaultMaxRedirects = 5;

    public static function getSubscribedEvents()
    {
        return array(
            'request.sent'        => array('onRequestSent', 100),
            'request.clone'       => 'cleanupRequest',
            'request.before_send' => 'cleanupRequest'
        );
    }

    /**
     * Clean up the parameters of a request when it is cloned
     *
     * @param Event $event Event emitted
     */
    public function cleanupRequest(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Called when a request receives a redirect response
     *
     * @param Event $event Event emitted
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
     * Get the original request that initiated a series of redirects
     *
     * @param RequestInterface $request Request to get the original request from
     *
     * @return RequestInterface
     */
    protected function getOriginalRequest(RequestInterface $request)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create a redirect request for a specific request object
     *
     * Takes into account strict RFC compliant redirection (e.g. redirect POST with POST) vs doing what most clients do
     * (e.g. redirect POST with GET).
     *
     * @param RequestInterface $request    Request being redirected
     * @param RequestInterface $original   Original request
     * @param int              $statusCode Status code of the redirect
     * @param string           $location   Location header of the redirect
     *
     * @return RequestInterface Returns a new redirect request
     * @throws CouldNotRewindStreamException If the body needs to be rewound but cannot
     */
    protected function createRedirectRequest(
        RequestInterface $request,
        $statusCode,
        $location,
        RequestInterface $original
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Prepare the request for redirection and enforce the maximum number of allowed redirects per client
     *
     * @param RequestInterface $original  Original request
     * @param RequestInterface $request   Request to prepare and validate
     * @param Response         $response  The current response
     *
     * @return RequestInterface
     */
    protected function prepareRedirection(RequestInterface $original, RequestInterface $request, Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Send a redirect request and handle any errors
     *
     * @param RequestInterface $original The originating request
     * @param RequestInterface $request  The current request being redirected
     * @param Response         $response The response of the current request
     *
     * @throws BadResponseException|\Exception
     */
    protected function sendRedirectRequest(RequestInterface $original, RequestInterface $request, Response $response)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Throw a too many redirects exception for a request
     *
     * @param RequestInterface $original Request
     * @param int              $max      Max allowed redirects
     *
     * @throws TooManyRedirectsException when too many redirects have been issued
     */
    protected function throwTooManyRedirectsException(RequestInterface $original, $max)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
