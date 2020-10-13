<?php

namespace Guzzle\Plugin\CurlAuth;

use Guzzle\Common\Event;
use Guzzle\Common\Version;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * Adds specified curl auth to all requests sent from a client. Defaults to CURLAUTH_BASIC if none supplied.
 * @deprecated Use $client->getConfig()->setPath('request.options/auth', array('user', 'pass', 'Basic|Digest');
 */
class CurlAuthPlugin implements EventSubscriberInterface
{
    private $username;
    private $password;
    private $scheme;

    /**
     * @param string $username HTTP basic auth username
     * @param string $password Password
     * @param int    $scheme   Curl auth scheme
     */
    public function __construct($username, $password, $scheme=CURLAUTH_BASIC)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function getSubscribedEvents()
    {
        return array('client.create_request' => array('onRequestCreate', 255));
    }

    /**
     * Add basic auth
     *
     * @param Event $event
     */
    public function onRequestCreate(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
