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

namespace phpDocumentor\Reflection;

use phpDocumentor\Reflection\Types\Array_;
use phpDocumentor\Reflection\Types\Compound;
use phpDocumentor\Reflection\Types\Context;
use phpDocumentor\Reflection\Types\Object_;

final class TypeResolver
{
    /** @var string Definition of the ARRAY operator for types */
    const OPERATOR_ARRAY = '[]';

    /** @var string Definition of the NAMESPACE operator in PHP */
    const OPERATOR_NAMESPACE = '\\';

    /** @var string[] List of recognized keywords and unto which Value Object they map */
    private $keywords = array(
        'string' => 'phpDocumentor\Reflection\Types\String_',
        'int' => 'phpDocumentor\Reflection\Types\Integer',
        'integer' => 'phpDocumentor\Reflection\Types\Integer',
        'bool' => 'phpDocumentor\Reflection\Types\Boolean',
        'boolean' => 'phpDocumentor\Reflection\Types\Boolean',
        'float' => 'phpDocumentor\Reflection\Types\Float_',
        'double' => 'phpDocumentor\Reflection\Types\Float_',
        'object' => 'phpDocumentor\Reflection\Types\Object_',
        'mixed' => 'phpDocumentor\Reflection\Types\Mixed',
        'array' => 'phpDocumentor\Reflection\Types\Array_',
        'resource' => 'phpDocumentor\Reflection\Types\Resource',
        'void' => 'phpDocumentor\Reflection\Types\Void_',
        'null' => 'phpDocumentor\Reflection\Types\Null_',
        'scalar' => 'phpDocumentor\Reflection\Types\Scalar',
        'callback' => 'phpDocumentor\Reflection\Types\Callable_',
        'callable' => 'phpDocumentor\Reflection\Types\Callable_',
        'false' => 'phpDocumentor\Reflection\Types\Boolean',
        'true' => 'phpDocumentor\Reflection\Types\Boolean',
        'self' => 'phpDocumentor\Reflection\Types\Self_',
        '$this' => 'phpDocumentor\Reflection\Types\This',
        'static' => 'phpDocumentor\Reflection\Types\Static_'
    );

    /** @var FqsenResolver */
    private $fqsenResolver;

    /**
     * Initializes this TypeResolver with the means to create and resolve Fqsen objects.
     *
     * @param FqsenResolver $fqsenResolver
     */
    public function __construct(FqsenResolver $fqsenResolver = null)
    {
        $this->fqsenResolver = $fqsenResolver ?: new FqsenResolver();
    }

    /**
     * Analyzes the given type and returns the FQCN variant.
     *
     * When a type is provided this method checks whether it is not a keyword or
     * Fully Qualified Class Name. If so it will use the given namespace and
     * aliases to expand the type to a FQCN representation.
     *
     * This method only works as expected if the namespace and aliases are set;
     * no dynamic reflection is being performed here.
     *
     * @param string $type     The relative or absolute type.
     * @param Context $context
     *
     * @uses Context::getNamespace()        to determine with what to prefix the type name.
     * @uses Context::getNamespaceAliases() to check whether the first part of the relative type name should not be
     *     replaced with another namespace.
     *
     * @return Type|null
     */
    public function resolve($type, Context $context = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds a keyword to the list of Keywords and associates it with a specific Value Object.
     *
     * @param string $keyword
     * @param string $typeClassName
     *
     * @return void
     */
    public function addKeyword($keyword, $typeClassName)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Detects whether the given type represents an array.
     *
     * @param string $type A relative or absolute type as defined in the phpDocumentor documentation.
     *
     * @return bool
     */
    private function isTypedArray($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Detects whether the given type represents a PHPDoc keyword.
     *
     * @param string $type A relative or absolute type as defined in the phpDocumentor documentation.
     *
     * @return bool
     */
    private function isKeyword($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Detects whether the given type represents a relative structural element name.
     *
     * @param string $type A relative or absolute type as defined in the phpDocumentor documentation.
     *
     * @return bool
     */
    private function isPartialStructuralElementName($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests whether the given type is a Fully Qualified Structural Element Name.
     *
     * @param string $type
     *
     * @return bool
     */
    private function isFqsen($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests whether the given type is a compound type (i.e. `string|int`).
     *
     * @param string $type
     *
     * @return bool
     */
    private function isCompoundType($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Resolves the given typed array string (i.e. `string[]`) into an Array object with the right types set.
     *
     * @param string $type
     * @param Context $context
     *
     * @return Array_
     */
    private function resolveTypedArray($type, Context $context)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Resolves the given keyword (such as `string`) into a Type object representing that keyword.
     *
     * @param string $type
     *
     * @return Type
     */
    private function resolveKeyword($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Resolves the given FQSEN string into an FQSEN object.
     *
     * @param string $type
     *
     * @return Object_
     */
    private function resolveTypedObject($type, Context $context = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Resolves a compound type (i.e. `string|int`) into the appropriate Type objects or FQSEN.
     *
     * @param string $type
     * @param Context $context
     *
     * @return Compound
     */
    private function resolveCompoundType($type, Context $context)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
