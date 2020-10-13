<?php

namespace Satooshi\Bundle\CoverallsV1Bundle\Collector;

use Satooshi\Component\System\Git\GitCommand;
use Satooshi\Bundle\CoverallsV1Bundle\Entity\Git\Git;
use Satooshi\Bundle\CoverallsV1Bundle\Entity\Git\Commit;
use Satooshi\Bundle\CoverallsV1Bundle\Entity\Git\Remote;

/**
 * @covers Satooshi\Bundle\CoverallsV1Bundle\Collector\GitInfoCollector
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
class GitInfoCollectorTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function createGitCommandStub()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function createGitCommandStubWith($getBranchesValue, $getHeadCommitValue, $getRemotesValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function createGitCommandStubCalledBranches($getBranchesValue, $getHeadCommitValue, $getRemotesValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function createGitCommandStubCalledHeadCommit($getBranchesValue, $getHeadCommitValue, $getRemotesValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setUpGitCommandStubWithGetBranchesOnce($stub, $getBranchesValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setUpGitCommandStubWithGetHeadCommitOnce($stub, $getHeadCommitValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setUpGitCommandStubWithGetHeadCommitNeverCalled($stub, $getHeadCommitValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setUpGitCommandStubWithGetRemotesOnce($stub, $getRemotesValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function setUpGitCommandStubWithGetRemotesNeverCalled($stub, $getRemotesValue)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getCommand()

    /**
     * @test
     */
    public function shouldHaveGitCommandOnConstruction()
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
    public function shouldCollect()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertGit(Git $git)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertCommit(Commit $commit)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function assertRemote(Remote $remote)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // collectBranch() exception

    /**
     * @test
     * @expectedException RuntimeException
     */
    public function throwRuntimeExceptionIfCurrentBranchNotFound()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // collectCommit() exception

    /**
     * @test
     * @expectedException RuntimeException
     */
    public function throwRuntimeExceptionIfHeadCommitIsInvalid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // collectRemotes() exception

    /**
     * @test
     * @expectedException RuntimeException
     */
    public function throwRuntimeExceptionIfRemoteIsInvalid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
