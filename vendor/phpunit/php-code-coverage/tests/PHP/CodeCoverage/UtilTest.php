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
 * Tests for the PHP_CodeCoverage_Util class.
 *
 * @since Class available since Release 1.0.0
 */
class PHP_CodeCoverage_UtilTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers PHP_CodeCoverage_Util::percent
     */
    public function testPercent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
