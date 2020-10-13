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
namespace Gitonomy\Git\Tests;

use Gitonomy\Git\Admin;
use Gitonomy\Git\Repository;

abstract class AbstractTest extends \PHPUnit_Framework_TestCase
{
    const REPOSITORY_URL = 'http://github.com/gitonomy/foobar.git';

    const LONGFILE_COMMIT = '4f17752acc9b7c54ba679291bf24cb7d354f0f4f';
    const BEFORE_LONGFILE_COMMIT = 'e0ec50e2af75fa35485513f60b2e658e245227e9';
    const LONGMESSAGE_COMMIT = '3febd664b6886344a9b32d70657687ea4b1b4fab';
    const INITIAL_COMMIT = '74acd054c8ec873ae6be044041d3a85a4f890ba5';
    const MERGE_COMMIT = '2f5b9d0a4e6e7173d7816e417805709c708674f8';
    const ENCODING_COMMIT = '779420b9b936f18a0b6579e1499a85b14270802e';

    /**
     * Local clone of remote URL. Avoids network call on each test.
     */
    private static $localRepository;

    /**
     * Creates an empty git repository and returns instance.
     *
     * @return Repository
     */
    public static function createEmptyRepository($bare = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Can be used as data provider to get bare/not-bare repositories.
     */
    public static function provideFoobar()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Can be used as data provider to get bare/not-bare repositories.
     */
    public static function provideEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates a fixture test repository.
     *
     * @return Repository
     */
    public static function createFoobarRepository($bare = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function registerDeletion(Repository $repository)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Created an empty directory and return path to it.
     *
     * @return string a fullpath
     */
    public static function createTempDir()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Deletes a directory recursively.
     *
     * @param string $dir directory to delete
     */
    public static function deleteDir($dir)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected static function getOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
