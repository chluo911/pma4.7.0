<?php
/**
 * This file is part of phpDocumentor.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright 2010-2015 Mike van Riel<mike@phpdoc.org>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection\Types;

use phpDocumentor\Reflection\Fqsen;
use phpDocumentor\Reflection\Type;

/**
 * Represents an array type as described in the PSR-5, the PHPDoc Standard.
 *
 * An array can be represented in two forms:
 *
 * 1. Untyped (`array`), where the key and value type is unknown and hence classified as 'Mixed'.
 * 2. Types (`string[]`), where the value type is provided by preceding an opening and closing square bracket with a
 *    type name.
 */
final class Array_ implements Type
{
    /** @var Type */
    private $valueType;

    /** @var Type */
    private $keyType;

    /**
     * Initializes this representation of an array with the given Type or Fqsen.
     *
     * @param Type $valueType
     * @param Type $keyType
     */
    public function __construct(Type $valueType = null, Type $keyType = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the type for the keys of this array.
     *
     * @return Type
     */
    public function getKeyType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the value for the keys of this array.
     *
     * @return Type
     */
    public function getValueType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a rendered output of the Type as it would be used in a DocBlock.
     *
     * @return string
     */
    public function __toString()
    {
        if ($this->valueType instanceof Mixed) {
            return 'array';
        }

        return $this->valueType . '[]';
    }
}
