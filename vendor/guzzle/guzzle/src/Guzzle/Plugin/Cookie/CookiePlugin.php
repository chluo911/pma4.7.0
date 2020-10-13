<?php

namespace Guzzle\Plugin\Cookie;

use Guzzle\Common\Event;
use Guzzle\Plugin\Cookie\CookieJar\ArrayCookieJar;
use Guzzle\Plugin\Cookie\CookieJar\CookieJarInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Adds, extracts, and persists cookies between HTTP requests
 */
class CookiePlugin implements EventSubscriberInterface
{
    /** @var CookieJarInterface Cookie cookieJar used to hold cookies */
    protected $cookieJar;

    /**
     * @param CookieJarInterface $cookieJar Cookie jar used to hold cookies. Creates an ArrayCookieJar by default.
     */
    public function __construct(CookieJarInterface $cookieJar = null)
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
            'request.before_send' => array('onRequestBeforeSend', 125),
            'request.sent'        => array('onRequestSent', 125)
        );
    }

    /**
     * Get the cookie cookieJar
     *
     * @return CookieJarInterface
     */
    public function getCookieJar()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Add cookies before a request is sent
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
     * Extract cookies from a sent request
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
