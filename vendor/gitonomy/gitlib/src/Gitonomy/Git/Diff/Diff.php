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

use Gitonomy\Git\Parser\DiffParser;
use Gitonomy\Git\Repository;

/**
 * Representation of a diff.
 *
 * @author Alexandre Salomé <alexandre.salome@gmail.com>
 */
class Diff
{
    /**
     * @var array
     */
    protected $files;

    /**
     * @var string
     */
    protected $rawDiff;

    /**
     * Constructs a new diff for a given revision.
     *
     * @param array  $files   The files
     * @param string $rawDiff The raw diff
     */
    public function __construct(array $files, $rawDiff)
    {
        $this->files = $files;
        $this->rawDiff = $rawDiff;
    }

    /**
     * @return Diff
     */
    public static function parse($rawDiff)
    {
        $parser = new DiffParser();
        $parser->parse($rawDiff);

        return new self($parser->files, $rawDiff);
    }

    public function setRepository(Repository $repository)
    {
        foreach ($this->files as $file) {
            $file->setRepository($repository);
        }
    }

    /**
     * @return array
     */
    public function getRevisions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get list of files modified in the diff's revision.
     *
     * @return array An array of Diff\File objects
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Returns the raw diff.
     *
     * @return string The raw diff
     */
    public function getRawDiff()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Export a diff as array.
     *
     * @return array The array
     */
    public function toArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Create a new instance of Diff from an array.
     *
     * @param array $array The array
     *
     * @return Diff The new instance
     */
    public static function fromArray(array $array)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
