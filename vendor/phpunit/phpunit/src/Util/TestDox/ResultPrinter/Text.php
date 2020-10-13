<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Prints TestDox documentation in text format.
 *
 * @since Class available since Release 2.1.0
 */
class PHPUnit_Util_TestDox_ResultPrinter_Text extends PHPUnit_Util_TestDox_ResultPrinter
{
    /**
     * Handler for 'start class' event.
     *
     * @param string $name
     */
    protected function startClass($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handler for 'on test' event.
     *
     * @param string $name
     * @param bool   $success
     */
    protected function onTest($name, $success = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handler for 'end class' event.
     *
     * @param string $name
     */
    protected function endClass($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
