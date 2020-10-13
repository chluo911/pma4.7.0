<?php
class Tests_Selenium2TestCase_Coverage_SingleFileTest extends PHPUnit_Framework_TestCase
{
    private $dummyTestId = 'dummyTestId';

    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testExecutingAFileWithThePrependedAndAppendedCoverageScriptsProducesACoverageData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testExecutingAFileWithThePrependedAndAppendedCoverageScriptsProducesACoverageData
     */
    public function testTheCoverageScriptReturnsTheContentOfASpecificCoverageFile($expectedDummyClassCoverage)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function clearCoverageFiles()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function assertCovered($line, array $fileCoverage)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function assertNotCovered($line, array $fileCoverage)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
