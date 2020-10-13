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
namespace Gitonomy\Git\Diff;

use Gitonomy\Git\Repository;

/**
 * @author Alexandre Salomé <alexandre.salome@gmail.com>
 */
class File
{
    /**
     * @var string
     */
    protected $oldName;

    /**
     * @var string
     */
    protected $newName;

    /**
     * @var string
     */
    protected $oldMode;

    /**
     * @var string
     */
    protected $newMode;

    /**
     * @var string
     */
    protected $oldIndex;

    /**
     * @var string
     */
    protected $newIndex;

    /**
     * @var bool
     */
    protected $isBinary;

    /**
     * @var array An array of FileChange objects
     */
    protected $changes;

    /**
     * @var Repository
     */
    protected $repository;

    /**
     * Instanciates a new File object.
     */
    public function __construct($oldName, $newName, $oldMode, $newMode, $oldIndex, $newIndex, $isBinary)
    {
        $this->oldName = $oldName;
        $this->newName = $newName;
        $this->oldMode = $oldMode;
        $this->newMode = $newMode;
        $this->oldIndex = $oldIndex;
        $this->newIndex = $newIndex;
        $this->isBinary = $isBinary;

        $this->changes = array();
    }

    public function addChange(FileChange $change)
    {
        $this->changes[] = $change;
    }

    /**
     * Indicates if this diff file is a creation.
     *
     * @return bool
     */
    public function isCreation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Indicates if this diff file is a modification.
     *
     * @return bool
     */
    public function isModification()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Indicates if it's a rename.
     *
     * A rename can only occurs if it's a modification (not a creation or a deletion).
     *
     * @return bool
     */
    public function isRename()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Indicates if the file mode has changed.
     */
    public function isChangeMode()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Indicates if this diff file is a deletion.
     *
     * @return bool
     */
    public function isDeletion()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Indicates if this diff file is a deletion.
     *
     * @return bool
     */
    public function isDelete()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return int Number of added lines
     */
    public function getAdditions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return int Number of deleted lines
     */
    public function getDeletions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getOldName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getNewName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getName()
    {
        if (null === $this->newName) {
            return $this->oldName;
        }

        return $this->newName;
    }

    public function getOldMode()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getNewMode()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getOldIndex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getNewIndex()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function isBinary()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getChanges()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function toArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function fromArray(array $array)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getAnchor()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getRepository()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function setRepository(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function getOldBlob()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getNewBlob()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
