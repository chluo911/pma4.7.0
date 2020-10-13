<?php
class Tests_Selenium2TestCase_Coverage_RemoteCoverageTest extends PHPUnit_Framework_TestCase
{
    public function testObtainsCodeCoverageInformationFromAPossiblyRemoteHttpServer()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function classSourceFile($className, array $content)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
