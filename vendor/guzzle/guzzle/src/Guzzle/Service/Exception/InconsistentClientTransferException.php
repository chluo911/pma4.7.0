<?php

namespace Guzzle\Service\Exception;

use Guzzle\Common\Exception\RuntimeException;

/**
 * Command transfer exception when commands do not all use the same client
 */
class InconsistentClientTransferException extends RuntimeException
{
    /**
     * @var array Commands with an invalid client
     */
    private $invalidCommands = array();

    /**
     * @param array $commands Invalid commands
     */
    public function __construct(array $commands)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the invalid commands
     *
     * @return array
     */
    public function getCommands()
    {
        return $this->invalidCommands;
    }
}
