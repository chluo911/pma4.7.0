<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Various checks and message functions used on index page.
 *
 * @package PhpMyAdmin-Setup
 */

use PMA\libraries\VersionInformation;
use PMA\libraries\Sanitize;

if (!defined('PHPMYADMIN')) {
    exit;
}

/**
 * Initializes message list
 *
 * @return void
 */
function PMA_messagesBegin()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Adds a new message to message list
 *
 * @param string $type    one of: notice, error
 * @param string $msgId   unique message identifier
 * @param string $title   language string id (in $str array)
 * @param string $message message text
 *
 * @return void
 */
function PMA_messagesSet($type, $msgId, $title, $message)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Cleans up message list
 *
 * @return void
 */
function PMA_messagesEnd()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Prints message list, must be called after PMA_messagesEnd()
 *
 * @return void
 */
function PMA_messagesShowHtml()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Checks for newest phpMyAdmin version and sets result as a new notice
 *
 * @return void
 */
function PMA_versionCheck()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
