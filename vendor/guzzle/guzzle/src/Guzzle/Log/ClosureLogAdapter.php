<?php

namespace Guzzle\Log;

/**
 * Logs messages using Closures. Closures combined with filtering can trigger application events based on log messages.
 */
class ClosureLogAdapter extends AbstractLogAdapter
{
    public function __construct($logObject)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function log($message, $priority = LOG_INFO, $extras = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
