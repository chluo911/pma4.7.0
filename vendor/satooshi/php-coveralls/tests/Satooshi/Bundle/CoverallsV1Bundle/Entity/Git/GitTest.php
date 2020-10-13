<?php

namespace Satooshi\Bundle\CoverallsV1Bundle\Entity\Git;

/**
 * @covers Satooshi\Bundle\CoverallsV1Bundle\Entity\Git\Git
 * @covers Satooshi\Bundle\CoverallsV1Bundle\Entity\Coveralls
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
class GitTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function createRemote($name = 'name', $url  = 'url')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function createCommit($id = 'id', $authorName  = 'author_name', $authorEmail = 'author_email', $committerName = 'committer_name', $committerEmail = 'committer_email', $message = 'message')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getBranch()

    /**
     * @test
     */
    public function shouldHaveBranchNameOnConstruction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // getHead()

    /**
     * @test
     */
    public function shouldHaveHeadCommitOnConstruction()
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
    public function shouldHaveRemotesOnConstruction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // toArray()

    /**
     * @test
     */
    public function shouldConvertToArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
