<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Filesystem;

use Symfony\Component\Filesystem\Exception\IOException;

/**
 * LockHandler class provides a simple abstraction to lock anything by means of
 * a file lock.
 *
 * A locked file is created based on the lock name when calling lock(). Other
 * lock handlers will not be able to lock the same name until it is released
 * (explicitly by calling release() or implicitly when the instance holding the
 * lock is destroyed).
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Romain Neutron <imprec@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class LockHandler
{
    private $file;
    private $handle;

    /**
     * @param string      $name     The lock name
     * @param string|null $lockPath The directory to store the lock. Default values will use temporary directory
     *
     * @throws IOException If the lock directory could not be created or is not writable
     */
    public function __construct($name, $lockPath = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Lock the resource.
     *
     * @param bool $blocking wait until the lock is released
     *
     * @return bool Returns true if the lock was acquired, false otherwise
     *
     * @throws IOException If the lock file could not be created or opened
     */
    public function lock($blocking = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Release the resource.
     */
    public function release()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
