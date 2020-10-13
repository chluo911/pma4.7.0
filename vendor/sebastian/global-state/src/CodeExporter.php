<?php
/*
 * This file is part of the GlobalState package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\GlobalState;

/**
 * Exports parts of a Snapshot as PHP code.
 */
class CodeExporter
{
    /**
     * @param  Snapshot $snapshot
     * @return string
     */
    public function constants(Snapshot $snapshot)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  Snapshot $snapshot
     * @return string
     */
    public function iniSettings(Snapshot $snapshot)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  mixed  $variable
     * @return string
     */
    private function exportVariable($variable)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  array $array
     * @return bool
     */
    private function arrayOnlyContainsScalars(array $array)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
