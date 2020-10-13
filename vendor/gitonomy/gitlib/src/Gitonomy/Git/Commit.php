<?php

/**
 * This file is part of Gitonomy.
 *
 * (c) Alexandre Salomé <alexandre.salome@gmail.com>
 * (c) Julien DIDIER <genzo.wm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Gitonomy\Git;

use Gitonomy\Git\Diff\Diff;
use Gitonomy\Git\Exception\InvalidArgumentException;
use Gitonomy\Git\Exception\ProcessException;
use Gitonomy\Git\Exception\ReferenceNotFoundException;
use Gitonomy\Git\Util\StringHelper;

/**
 * Representation of a Git commit.
 *
 * @author Alexandre Salomé <alexandre.salome@gmail.com>
 */
class Commit extends Revision
{
    /**
     * Associative array of commit data.
     *
     * @var array
     */
    private $data = array();

    /**
     * Constructor.
     *
     * @param Gitonomy\Git\Repository $repository Repository of the commit
     * @param string                  $hash       Hash of the commit
     */
    public function __construct(Repository $repository, $hash, array $data = array())
    {
        if (!preg_match('/^[a-f0-9]{40}$/', $hash)) {
            throw new ReferenceNotFoundException($hash);
        }

        parent::__construct($repository, $hash);

        $this->setData($data);
    }

    public function setData(array $data)
    {
        foreach ($data as $name => $value) {
            $this->data[$name] = $value;
        }
    }

    /**
     * @return Diff
     */
    public function getDiff()
    {
        $args = array('-r', '-p', '-m', '-M', '--no-commit-id', '--full-index', $this->revision);

        $diff = Diff::parse($this->repository->run('diff-tree', $args));
        $diff->setRepository($this->repository);

        return $diff;
    }

    /**
     * Returns the commit hash.
     *
     * @return string A SHA1 hash
     */
    public function getHash()
    {
        return $this->revision;
    }

    /**
     * Returns the short commit hash.
     *
     * @return string A SHA1 hash
     */
    public function getShortHash()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a fixed-with short hash.
     */
    public function getFixedShortHash($length = 6)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns parent hashes.
     *
     * @return array An array of SHA1 hashes
     */
    public function getParentHashes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the parent commits.
     *
     * @return array An array of Commit objects
     */
    public function getParents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the tree hash.
     *
     * @return string A SHA1 hash
     */
    public function getTreeHash()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getTree()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return Commit
     */
    public function getLastModification($path = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the first line of the commit, and the first 50 characters.
     *
     * Ported from https://github.com/fabpot/Twig-extensions/blob/d67bc7e69788795d7905b52d31188bbc1d390e01/lib/Twig/Extensions/Extension/Text.php#L52-L109
     *
     * @param int    $length
     * @param bool   $preserve
     * @param string $separator
     *
     * @return string
     */
    public function getShortMessage($length = 50, $preserve = false, $separator = '...')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Resolves all references associated to this commit.
     *
     * @return array An array of references (Branch, Tag, Squash)
     */
    public function resolveReferences()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Find branch containing the commit.
     *
     * @param bool $local  set true to try to locate a commit on local repository
     * @param bool $remote set true to try to locate a commit on remote repository
     *
     * @return array An array of Reference\Branch
     */
    public function getIncludingBranches($local = true, $remote = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the author name.
     *
     * @return string A name
     */
    public function getAuthorName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the author email.
     *
     * @return string An email
     */
    public function getAuthorEmail()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the authoring date.
     *
     * @return DateTime A time object
     */
    public function getAuthorDate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the committer name.
     *
     * @return string A name
     */
    public function getCommitterName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the comitter email.
     *
     * @return string An email
     */
    public function getCommitterEmail()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the authoring date.
     *
     * @return DateTime A time object
     */
    public function getCommitterDate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the message of the commit.
     *
     * @return string A commit message
     */
    public function getMessage()
    {
        return $this->getData('message');
    }

    /**
     * Returns the subject message (the first line).
     *
     * @return string The subject message
     */
    public function getSubjectMessage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return the body message.
     *
     * @return string The body message
     */
    public function getBodyMessage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @inheritdoc
     */
    public function getCommit()
    {
        return $this;
    }

    private function getData($name)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }

        if ($name === 'shortHash') {
            $this->data['shortHash'] = trim($this->repository->run('log', array('--abbrev-commit', '--format=%h', '-n', 1, $this->revision)));

            return $this->data['shortHash'];
        }

        if ($name === 'tree') {
            $this->data['tree'] = $this->repository->getTree($this->getData('treeHash'));

            return $this->data['tree'];
        }

        if ($name === 'subjectMessage') {
            $lines = explode("\n", $this->getData('message'));
            $this->data['subjectMessage'] = reset($lines);

            return $this->data['subjectMessage'];
        }

        if ($name === 'bodyMessage') {
            $message = $this->getData('message');

            $lines = explode("\n", $message);

            array_shift($lines);
            array_shift($lines);

            $data['bodyMessage'] = implode("\n", $lines);

            return $data['bodyMessage'];
        }

        $parser = new Parser\CommitParser();
        try {
            $result = $this->repository->run('cat-file', array('commit', $this->revision));
        } catch (ProcessException $e) {
            throw new ReferenceNotFoundException(sprintf('Can not find reference "%s"', $this->revision));
        }

        $parser->parse($result);

        $this->data['treeHash'] = $parser->tree;
        $this->data['parentHashes'] = $parser->parents;
        $this->data['authorName'] = $parser->authorName;
        $this->data['authorEmail'] = $parser->authorEmail;
        $this->data['authorDate'] = $parser->authorDate;
        $this->data['committerName'] = $parser->committerName;
        $this->data['committerEmail'] = $parser->committerEmail;
        $this->data['committerDate'] = $parser->committerDate;
        $this->data['message'] = $parser->message;

        if (!isset($this->data[$name])) {
            throw new \InvalidArgumentException(sprintf('No data named "%s" in Commit.', $name));
        }

        return $this->data[$name];
    }
}
