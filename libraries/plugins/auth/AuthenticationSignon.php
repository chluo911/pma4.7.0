<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * SignOn Authentication plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Authentication
 * @subpackage SignOn
 */
namespace PMA\libraries\plugins\auth;

use PMA\libraries\plugins\AuthenticationPlugin;
use PMA;

/**
 * Handles the SignOn authentication method
 *
 * @package PhpMyAdmin-Authentication
 */
class AuthenticationSignon extends AuthenticationPlugin
{
    /**
     * Displays authentication form
     *
     * @return boolean   always true (no return indeed)
     */
    public function auth()
    {
        unset($_SESSION['LAST_SIGNON_URL']);
        if (empty($GLOBALS['cfg']['Server']['SignonURL'])) {
            PMA_fatalError('You must set SignonURL!');
        } else {
            PMA_sendHeaderLocation($GLOBALS['cfg']['Server']['SignonURL']);
        }

        if (!defined('TESTSUITE')) {
            exit();
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
     * @global  array  $cfg                   the valid servers settings
     * @global  string $PHP_AUTH_USER         the current username
     * @global  string $PHP_AUTH_PW           the current password
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
     * @return boolean   always true (no return indeed)
     */
    public function authFails()
    {
        /* Session name */
        $session_name = $GLOBALS['cfg']['Server']['SignonSession'];

        /* Does session exist? */
        if (isset($_COOKIE[$session_name])) {
            /* End current session */
            if (!defined('TESTSUITE')) {
                session_write_close();
            }

            /* Load single signon session */
            session_name($session_name);
            session_id($_COOKIE[$session_name]);
            if (!defined('TESTSUITE')) {
                session_start();
            }

            /* Set error message */
            $_SESSION['PMA_single_signon_error_message'] = $this->getErrorMessage();
        }
        $this->auth();
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
