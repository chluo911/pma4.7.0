<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * MIME detection code.
 *
 * @package PhpMyAdmin
 * @todo Maybe we could try to use fileinfo module if loaded
 */

/**
 * Tries to detect MIME type of content.
 *
 * @param string &$test First few bytes of content to use for detection
 *
 * @return string
 */
function PMA_detectMIME(&$test)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
