<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * HTTP Authentication plugin for phpMyAdmin.
 * NOTE: Requires PHP loaded as a Apache module.
 *
 * @package    PhpMyAdmin-Authentication
 * @subpackage HTTP
 */
namespace PMA\libraries\plugins\auth;

use PMA\libraries\plugins\AuthenticationPlugin;
use PMA\libraries\Message;
use PMA\libraries\Response;
use PMA\libraries\Config;

/**
 * Handles the HTTP authentication methods
 *
 * @package PhpMyAdmin-Authentication
 */
class AuthenticationHttp extends AuthenticationPlugin
{
    /**
     * Displays authentication form and redirect as necessary
     *
     * @return boolean   always true (no return indeed)
     */
    public function auth()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Displays authentication form
     *
     * @return boolean
     */
    public function authForm()
    {
        if (empty($GLOBALS['cfg']['Server']['auth_http_realm'])) {
            if (empty($GLOBALS['cfg']['Server']['verbose'])) {
                $server_message = $GLOBALS['cfg']['Server']['host'];
            } else {
                $server_message = $GLOBALS['cfg']['Server']['verbose'];
            }
            $realm_message = 'phpMyAdmin ' . $server_message;
        } else {
            $realm_message = $GLOBALS['cfg']['Server']['auth_http_realm'];
        }

        $response = Response::getInstance();

        // remove non US-ASCII to respect RFC2616
        $realm_message = preg_replace('/[^\x20-\x7e]/i', '', $realm_message);
        $response->header('WWW-Authenticate: Basic realm="' . $realm_message . '"');
        $response->header('HTTP/1.0 401 Unauthorized');
        if (php_sapi_name() !== 'cgi-fcgi') {
            $response->header('status: 401 Unauthorized');
        }

        /* HTML header */
        $footer = $response->getFooter();
        $footer->setMinimal();
        $header = $response->getHeader();
        $header->setTitle(__('Access denied!'));
        $header->disableMenuAndConsole();
        $header->setBodyId('loginform');

        $response->addHTML('<h1>');
        $response->addHTML(sprintf(__('Welcome to %s'), ' phpMyAdmin'));
        $response->addHTML('</h1>');
        $response->addHTML('<h3>');
        $response->addHTML(
            Message::error(
                __('Wrong username/password. Access denied.')
            )
        );
        $response->addHTML('</h3>');

        $response->addHTML(Config::renderFooter());

        if (!defined('TESTSUITE')) {
            exit;
        } else {
            return false;
        }
    }

    /**
     * Gets advanced authentication settings
     *
     * @global string $PHP_AUTH_USER the username
     * @global string $PHP_AUTH_PW   the password
     *
     * @return boolean   whether we get authentication settings or not
     */
    public function authCheck()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set the user and password after last checkings if required
     *
     * @global  array   $cfg                   the valid servers settings
     * @global  integer $server                the id of the current server
     * @global  string  $PHP_AUTH_USER         the current username
     * @global  string  $PHP_AUTH_PW           the current password
     *
     * @return boolean   always true
     */
    public function authSetUser()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * User is not allowed to login to MySQL -> authentication failed
     *
     * @return bool true
     */
    public function authFails()
    {
        $error = $GLOBALS['dbi']->getError();
        if ($error && $GLOBALS['errno'] != 1045) {
            PMA_fatalError($error);

            return true;
        }

        $this->authForm();

        return true;
    }

    /**
     * Returns URL for login form.
     *
     * @return string
     */
    public function getLoginFormURL()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
