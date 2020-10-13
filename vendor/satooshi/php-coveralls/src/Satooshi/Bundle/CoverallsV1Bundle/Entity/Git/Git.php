<?php

namespace Satooshi\Bundle\CoverallsV1Bundle\Entity\Git;

use Satooshi\Bundle\CoverallsV1Bundle\Entity\Coveralls;

/**
 * Data represents "git" of Coveralls API.
 *
 * "git": {
 *   "head": {
 *     "id": "b31f08d07ae564b08237e5a336e478b24ccc4a65",
 *     "author_name": "Nick Merwin",
 *     "author_email": "...",
 *     "committer_name": "Nick Merwin",
 *     "committer_email": "...",
 *     "message": "version bump"
 *   },
 *   "branch": "master",
 *   "remotes": [
 *     {
 *       "name": "origin",
 *       "url": "git@github.com:lemurheavy/coveralls-ruby.git"
 *     }
 *   ]
 * }
 *
 * @author Kitamura Satoshi <with.no.parachute@gmail.com>
 */
class Git extends Coveralls
{
    /**
     * Branch name.
     *
     * @var string
     */
    protected $branch;

    /**
     * Head.
     *
     * @var Commit
     */
    protected $head;

    /**
     * Remote.
     *
     * @var Remote[]
     */
    protected $remotes;

    /**
     * Constructor.
     *
     * @param string $branch  Branch name.
     * @param Commit $head    HEAD commit.
     * @param array  $remotes Remote repositories.
     */
    public function __construct($branch, Commit $head, array $remotes)
    {
        $this->branch  = $branch;
        $this->head    = $head;
        $this->remotes = $remotes;
    }

    // API

    /**
     * {@inheritdoc}
     *
     * @see \Satooshi\Bundle\CoverallsBundle\Entity\ArrayConvertable::toArray()
     */
    public function toArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // accessor

    /**
     * Return branch name.
     *
     * @return string
     */
    public function getBranch()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return HEAD commit.
     *
     * @return \Satooshi\Bundle\CoverallsV1Bundle\Entity\Git\Commit
     */
    public function getHead()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return remote repositories.
     *
     * @return \Satooshi\Bundle\CoverallsV1Bundle\Entity\Git\Remote[]
     */
    public function getRemotes()
    {
        return $this->remotes;
    }
}
