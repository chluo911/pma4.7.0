<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Exception;

/**
 * Exception class for when a resource cannot be loaded or imported.
 *
 * @author Ryan Weaver <ryan@thatsquality.com>
 */
class FileLoaderLoadException extends \Exception
{
    /**
     * @param string     $resource       The resource that could not be imported
     * @param string     $sourceResource The original resource importing the new resource
     * @param int        $code           The error code
     * @param \Exception $previous       A previous exception
     */
    public function __construct($resource, $sourceResource = null, $code = null, $previous = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function varToString($var)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
