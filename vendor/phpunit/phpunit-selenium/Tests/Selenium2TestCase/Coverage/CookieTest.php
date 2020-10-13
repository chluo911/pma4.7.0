<?php
class Tests_Selenium2TestCase_Coverage_CookieTest extends Tests_Selenium2TestCase_BaseTestCase
{
    // this is a dummy URL (no server at that port), but Firefox still sets domain cookie, which is what's needed
    protected $coverageScriptUrl = 'http://127.0.0.1:8081/';

    public static function setUpBeforeClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function run(PHPUnit_Framework_TestResult $result = null)
    {
        // make sure code coverage collection is enabled
        if ($result === null) {
            $result = $this->createResult();
        }
        if (!$result->getCollectCodeCoverageInformation()) {
            $result->setCodeCoverage(new PHP_CodeCoverage());
        }

        parent::run($result);

        $result->getCodeCoverage()->clear();
    }

    protected function getTestIdCookie()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testTestIdCookieIsSet()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends testTestIdCookieIsSet
     */
    public function testTestsHaveUniqueTestIdCookies($previousTestIdCookie)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
