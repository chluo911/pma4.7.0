<?php
/*
 * This file is part of the PHP_CodeCoverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Driver for HHVM's code coverage functionality.
 *
 * @since Class available since Release 2.2.2
 * @codeCoverageIgnore
 */
class PHP_CodeCoverage_Driver_HHVM extends PHP_CodeCoverage_Driver_Xdebug
{
    /**
     * Start collection of code coverage information.
     */
    public function start()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
