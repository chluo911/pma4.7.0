<?php

namespace Satooshi\Bundle\CoverallsV1Bundle\Entity;

/**
 * @covers Satooshi\Bundle\CoverallsV1Bundle\Entity\Metrics
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
class MetricsTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // hasStatements()
    // getStatements()

    /**
     * @test
     */
    public function shouldNotHaveStatementsOnConstructionWithoutCoverage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     */
    public function shouldHaveStatementsOnConstructionWithCoverage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getCoveredStatements()

    /**
     * @test
     */
    public function shouldNotHaveCoveredStatementsOnConstructionWithoutCoverage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     */
    public function shouldHaveCoveredStatementsOnConstructionWithCoverage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getLineCoverage()

    /**
     * @test
     */
    public function shouldNotHaveLineCoverageOnConstructionWithoutCoverage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     */
    public function shouldHaveLineCoverageOnConstructionWithCoverage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // merge()

    /**
     * @test
     */
    public function shouldMergeThatWithEmptyMetrics()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     */
    public function shouldMergeThat()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
