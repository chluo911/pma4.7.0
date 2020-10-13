<?php
class DoubleTestCase implements PHPUnit_Framework_Test
{
    protected $testCase;

    public function __construct(PHPUnit_Framework_TestCase $testCase)
    {
        $this->testCase = $testCase;
    }

    public function count()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function run(PHPUnit_Framework_TestResult $result = null)
    {
        $result->startTest($this);

        $this->testCase->runBare();
        $this->testCase->runBare();

        $result->endTest($this, 0);
    }
}
