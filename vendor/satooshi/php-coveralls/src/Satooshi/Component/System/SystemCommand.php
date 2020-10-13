<?php

namespace Satooshi\Component\System;

/**
 * System command.
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
abstract class SystemCommand
{
    /**
     * Command name or path.
     *
     * @var string
     */
    protected $commandPath;

    // API

    /**
     * Execute command.
     *
     * @return array
     */
    public function execute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // internal method

    /**
     * Execute command.
     *
     * @param string $command
     *
     * @return array
     *
     * @throws \RuntimeException
     */
    protected function executeCommand($command)
    {
        exec($command, $result, $returnValue);

        if ($returnValue === 0) {
            return $result;
        }

        throw new \RuntimeException(sprintf('Failed to execute command: %s', $command), $returnValue);
    }

    /**
     * Create command.
     *
     * @param string $args Command arguments.
     *
     * @return string
     */
    protected function createCommand($args = null)
    {
        if ($args === null) {
            return $this->commandPath;
        }

        // escapeshellarg($args) ?
        return sprintf('%s %s', $this->commandPath, $args);
    }

    // accessor

    /**
     * Set command path.
     *
     * @param string $commandPath Command name or path.
     */
    public function setCommandPath($commandPath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return command path.
     *
     * @return string
     */
    public function getCommandPath()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
