<?php

namespace Satooshi\Bundle\CoverallsV1Bundle\Entity\Exception;

/**
 * @covers Satooshi\Bundle\CoverallsV1Bundle\Entity\Exception\RequirementsNotSatisfiedException
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
class RequirementsNotSatisfiedExceptionTest extends \PHPUnit_Framework_TestCase
{
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

    // setReadEnv()

    /**
     * @test
     */
    public function shouldSetReadEnv()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getHelpMessage()

    /**
     * @test
     */
    public function shouldGetHelpMessageWithStringEnvVar()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getHelpMessage()

    /**
     * @test
     */
    public function shouldGetHelpMessageWithSecretStringEnvVarHidden()
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
    public function shouldGetHelpMessageWithSecretEmptyStringEnvVarShown()
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
    public function shouldGetHelpMessageWithIntegerEnvVar()
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
    public function shouldGetHelpMessageWithBooleanEnvVar()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
