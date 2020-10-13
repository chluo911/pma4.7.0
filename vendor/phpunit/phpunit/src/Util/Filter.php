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
 * Utility class for code filtering.
 *
 * @since Class available since Release 2.0.0
 */
class PHPUnit_Util_Filter
{
    /**
     * Filters stack frames from PHPUnit classes.
     *
     * @param Exception $e
     * @param bool      $asString
     *
     * @return string
     */
    public static function getFilteredStacktrace(Exception $e, $asString = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array  $trace
     * @param string $file
     * @param int    $line
     *
     * @return bool
     *
     * @since  Method available since Release 3.3.2
     */
    private static function frameExists(array $trace, $file, $line)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
