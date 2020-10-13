<?php

namespace Satooshi\Bundle\CoverallsV1Bundle\Collector;

use Satooshi\Bundle\CoverallsV1Bundle\Config\Configuration;
use Satooshi\ProjectTestCase;

/**
 * @covers Satooshi\Bundle\CoverallsV1Bundle\Collector\CiEnvVarsCollector
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
class CiEnvVarsCollectorTest extends ProjectTestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function createConfiguration()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function createCiEnvVarsCollector($config = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // collect()

    /**
     * @test
     */
    public function shouldCollectTravisCiEnvVars()
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
    public function shouldCollectTravisProEnvVars()
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
    public function shouldCollectCircleCiEnvVars()
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
    public function shouldCollectJenkinsEnvVars()
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
    public function shouldCollectLocalEnvVars()
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
    public function shouldCollectUnsupportedConfig()
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
    public function shouldCollectUnsupportedEnvVars()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getReadEnv()

    /**
     * @test
     */
    public function shouldNotHaveReadEnvOnConstruction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectTravisCiEnvVars
     */
    public function shouldHaveReadEnvAfterCollectTravisCiEnvVars(CiEnvVarsCollector $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectTravisProEnvVars
     */
    public function shouldHaveReadEnvAfterCollectTravisProEnvVars(CiEnvVarsCollector $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectCircleCiEnvVars
     */
    public function shouldHaveReadEnvAfterCollectCircleCiEnvVars(CiEnvVarsCollector $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectJenkinsEnvVars
     */
    public function shouldHaveReadEnvAfterCollectJenkinsEnvVars(CiEnvVarsCollector $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectLocalEnvVars
     */
    public function shouldHaveReadEnvAfterCollectLocalEnvVars(CiEnvVarsCollector $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectUnsupportedConfig
     */
    public function shouldHaveReadEnvAfterCollectUnsupportedConfig(CiEnvVarsCollector $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @test
     * @depends shouldCollectUnsupportedEnvVars
     */
    public function shouldHaveReadEnvAfterCollectUnsupportedEnvVars(CiEnvVarsCollector $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
