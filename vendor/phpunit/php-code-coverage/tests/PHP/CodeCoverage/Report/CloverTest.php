<?php
/*
 * This file is part of the PHP_CodeCoverage package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!defined('TEST_FILES_PATH')) {
    define(
        'TEST_FILES_PATH',
        dirname(dirname(dirname(__FILE__))) . DIRECTORY_SEPARATOR .
        '_files' . DIRECTORY_SEPARATOR
    );
}

require_once TEST_FILES_PATH . '../TestCase.php';

/**
 * Tests for the PHP_CodeCoverage_Report_Clover class.
 *
 * @since Class available since Release 1.0.0
 */
class PHP_CodeCoverage_Report_CloverTest extends PHP_CodeCoverage_TestCase
{
    /**
     * @covers PHP_CodeCoverage_Report_Clover
     */
    public function testCloverForBankAccountTest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Report_Clover
     */
    public function testCloverForFileWithIgnoredLines()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Report_Clover
     */
    public function testCloverForClassWithAnonymousFunction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
