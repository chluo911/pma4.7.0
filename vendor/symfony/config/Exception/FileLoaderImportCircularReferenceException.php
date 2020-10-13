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
 * Exception class for when a circular reference is detected when importing resources.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class FileLoaderImportCircularReferenceException extends FileLoaderLoadException
{
    public function __construct(array $resources, $code = null, $previous = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
