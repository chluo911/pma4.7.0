<?php

namespace Guzzle\Log;

/**
 * Adapter class that allows Guzzle to log data using various logging implementations
 */
abstract class AbstractLogAdapter implements LogAdapterInterface
{
    protected $log;

    public function getLogObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
