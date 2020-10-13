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
 */
class Util_GlobalStateTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers PHPUnit_Util_GlobalState::processIncludedFilesAsString
     */
    public function testIncludedFilesAsStringSkipsVfsProtocols()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
