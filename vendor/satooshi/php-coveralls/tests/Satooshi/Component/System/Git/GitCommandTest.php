<?php

namespace Satooshi\Component\System\Git;

/**
 * @covers Satooshi\Component\System\Git\GitCommand
 * @covers Satooshi\Component\System\SystemCommand
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
class GitCommandTest extends \PHPUnit_Framework_TestCase
{
    protected function createGitCommandMock($params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getCommandPath()

    /**
     * @test
     */
    public function shouldBeGitCommand()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getBranches()
    //

    /**
     * @test
     */
    public function shouldExecuteGitBranchCommand()
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
    public function shouldReturnBranches()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getHeadCommit()

    /**
     * @test
     */
    public function shouldExecuteGitLogCommand()
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
    public function shouldReturnHeadCommit()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getRemotes()

    /**
     * @test
     */
    public function shouldExecuteGitRemoteCommand()
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
    public function shouldReturnRemotes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // execute()

    /**
     * @test
     * @expectedException RuntimeException
     */
    public function throwRuntimeExceptionIfExecutedWithoutArgs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // createCommand()

    /**
     * @test
     */
    public function shouldCreateCommand()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
