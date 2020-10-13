<?php
/**
 * Phing wrapper around git subsplit.
 *
 * @see https://github.com/dflydev/git-subsplit
 * @copyright 2012 Clay Loveless <clay@php.net>
 * @license   http://claylo.mit-license.org/2012/ MIT License
 */

require_once 'phing/tasks/ext/git/GitBaseTask.php';

// base - base of tree to split out
// subIndicatorFile - composer.json, package.xml?
class GuzzleSubSplitTask extends GitBaseTask
{
    /**
     * What git repository to pull from and publish to
     */
    protected $remote = null;

    /**
     * Publish for comma-separated heads instead of all heads
     */
    protected $heads = null;

    /**
     * Publish for comma-separated tags instead of all tags
     */
    protected $tags = null;

    /**
     * Base of the tree RELATIVE TO .subsplit working dir
     */
    protected $base = null;

    /**
     * The presence of this file will indicate that the directory it resides
     * in is at the top level of a split.
     */
    protected $subIndicatorFile = 'composer.json';

    /**
     * Do everything except actually send the update.
     */
    protected $dryRun = null;

    /**
     * Do not sync any heads.
     */
    protected $noHeads = false;

    /**
     * Do not sync any tags.
     */
    protected $noTags = false;

    /**
     * The splits we found in the heads
     */
    protected $splits;

    public function setRemote($str)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getRemote()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setHeads($str)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getHeads()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setTags($str)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setBase($str)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getBase()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setSubIndicatorFile($str)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getSubIndicatorFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setDryRun($bool)
    {
        $this->dryRun = (bool) $bool;
    }

    public function getDryRun()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setNoHeads($bool)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getNoHeads()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setNoTags($bool)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getNoTags()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * GitClient from VersionControl_Git
     */
    protected $client   = null;

    /**
     * The main entry point
     */
    public function main()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function publish()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Runs `git subsplit update`
     */
    public function subsplitUpdate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Runs `git subsplit init` based on the remote repository.
     */
    public function subsplitInit()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Find the composer.json files using Phing's directory scanner
     *
     * @return array
     */
    protected function findSplits()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Based on list of repositories we determined we *should* have, talk
     * to GitHub and make sure they're all there.
     *
     */
    protected function verifyRepos()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
