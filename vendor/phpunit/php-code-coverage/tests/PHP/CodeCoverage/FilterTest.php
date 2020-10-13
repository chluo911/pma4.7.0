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

/**
 * Tests for the PHP_CodeCoverage_Filter class.
 *
 * @since Class available since Release 1.0.0
 */
class PHP_CodeCoverage_FilterTest extends PHPUnit_Framework_TestCase
{
    protected $filter;
    protected $files;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Filter::addFileToBlacklist
     * @covers PHP_CodeCoverage_Filter::getBlacklist
     */
    public function testAddingAFileToTheBlacklistWorks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Filter::removeFileFromBlacklist
     * @covers PHP_CodeCoverage_Filter::getBlacklist
     */
    public function testRemovingAFileFromTheBlacklistWorks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers  PHP_CodeCoverage_Filter::addDirectoryToBlacklist
     * @covers  PHP_CodeCoverage_Filter::getBlacklist
     * @depends testAddingAFileToTheBlacklistWorks
     */
    public function testAddingADirectoryToTheBlacklistWorks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Filter::addFilesToBlacklist
     * @covers PHP_CodeCoverage_Filter::getBlacklist
     */
    public function testAddingFilesToTheBlacklistWorks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers  PHP_CodeCoverage_Filter::removeDirectoryFromBlacklist
     * @covers  PHP_CodeCoverage_Filter::getBlacklist
     * @depends testAddingADirectoryToTheBlacklistWorks
     */
    public function testRemovingADirectoryFromTheBlacklistWorks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Filter::addFileToWhitelist
     * @covers PHP_CodeCoverage_Filter::getWhitelist
     */
    public function testAddingAFileToTheWhitelistWorks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Filter::removeFileFromWhitelist
     * @covers PHP_CodeCoverage_Filter::getWhitelist
     */
    public function testRemovingAFileFromTheWhitelistWorks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers  PHP_CodeCoverage_Filter::addDirectoryToWhitelist
     * @covers  PHP_CodeCoverage_Filter::getWhitelist
     * @depends testAddingAFileToTheWhitelistWorks
     */
    public function testAddingADirectoryToTheWhitelistWorks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Filter::addFilesToWhitelist
     * @covers PHP_CodeCoverage_Filter::getBlacklist
     */
    public function testAddingFilesToTheWhitelistWorks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers  PHP_CodeCoverage_Filter::removeDirectoryFromWhitelist
     * @covers  PHP_CodeCoverage_Filter::getWhitelist
     * @depends testAddingADirectoryToTheWhitelistWorks
     */
    public function testRemovingADirectoryFromTheWhitelistWorks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Filter::isFile
     */
    public function testIsFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Filter::isFiltered
     */
    public function testBlacklistedFileIsFiltered()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Filter::isFiltered
     */
    public function testWhitelistedFileIsNotFiltered()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Filter::isFiltered
     */
    public function testNotWhitelistedFileIsFiltered()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_CodeCoverage_Filter::isFiltered
     * @covers PHP_CodeCoverage_Filter::isFile
     */
    public function testNonFilesAreFiltered()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
