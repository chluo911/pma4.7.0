<?php

namespace Guzzle\Log;

/**
 * Stores all log messages in an array
 */
class ArrayLogAdapter implements LogAdapterInterface
{
    protected $logs = array();

    public function log($message, $priority = LOG_INFO, $extras = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get logged entries
     *
     * @return array
     */
    public function getLogs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Clears logged entries
     */
    public function clearLogs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
