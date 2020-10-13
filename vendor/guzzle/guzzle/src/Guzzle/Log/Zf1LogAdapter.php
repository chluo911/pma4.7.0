<?php

namespace Guzzle\Log;

use Guzzle\Common\Version;

/**
 * Adapts a Zend Framework 1 logger object
 * @deprecated
 * @codeCoverageIgnore
 */
class Zf1LogAdapter extends AbstractLogAdapter
{
    public function __construct(\Zend_Log $logObject)
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
