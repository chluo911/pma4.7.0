<?php

namespace Guzzle\Log;

use Zend\Log\Logger;

/**
 * Adapts a Zend Framework 2 logger object
 */
class Zf2LogAdapter extends AbstractLogAdapter
{
    public function __construct(Logger $logObject)
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
