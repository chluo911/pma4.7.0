<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Loader;

use Symfony\Component\Config\FileLocatorInterface;
use Symfony\Component\Config\Exception\FileLoaderLoadException;
use Symfony\Component\Config\Exception\FileLoaderImportCircularReferenceException;

/**
 * FileLoader is the abstract class used by all built-in loaders that are file based.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class FileLoader extends Loader
{
    /**
     * @var array
     */
    protected static $loading = array();

    /**
     * @var FileLocatorInterface
     */
    protected $locator;

    private $currentDir;

    /**
     * Constructor.
     *
     * @param FileLocatorInterface $locator A FileLocatorInterface instance
     */
    public function __construct(FileLocatorInterface $locator)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the current directory.
     *
     * @param string $dir
     */
    public function setCurrentDir($dir)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the file locator used by this loader.
     *
     * @return FileLocatorInterface
     */
    public function getLocator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Imports a resource.
     *
     * @param mixed       $resource       A Resource
     * @param string|null $type           The resource type or null if unknown
     * @param bool        $ignoreErrors   Whether to ignore import errors or not
     * @param string|null $sourceResource The original resource importing the new resource
     *
     * @return mixed
     *
     * @throws FileLoaderLoadException
     * @throws FileLoaderImportCircularReferenceException
     */
    public function import($resource, $type = null, $ignoreErrors = false, $sourceResource = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
