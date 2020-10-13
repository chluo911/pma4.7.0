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

use Mockery as m;
use phpDocumentor\Reflection\Types\Array_;
use phpDocumentor\Reflection\Types\Compound;
use phpDocumentor\Reflection\Types\Context;
use phpDocumentor\Reflection\Types\Object_;

/**
 * @coversDefaultClass phpDocumentor\Reflection\TypeResolver
 */
class TypeResolverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $keyword
     * @param string $expectedClass
     *
     * @covers ::__construct
     * @covers ::resolve
     * @covers ::<private>
     *
     * @uses phpDocumentor\Reflection\Types\Context
     * @uses phpDocumentor\Reflection\Types\Array_
     * @uses phpDocumentor\Reflection\Types\Object_
     *
     * @dataProvider provideKeywords
     */
    public function testResolvingKeywords($keyword, $expectedClass)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $fqsen
     *
     * @covers ::__construct
     * @covers ::resolve
     * @covers ::<private>
     *
     * @uses phpDocumentor\Reflection\Types\Context
     * @uses phpDocumentor\Reflection\Types\Object_
     * @uses phpDocumentor\Reflection\Fqsen
     * @uses phpDocumentor\Reflection\FqsenResolver
     *
     * @dataProvider provideFqcn
     */
    public function testResolvingFQSENs($fqsen)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::resolve
     * @covers ::<private>
     *
     * @uses phpDocumentor\Reflection\Types\Context
     * @uses phpDocumentor\Reflection\Types\Object_
     * @uses phpDocumentor\Reflection\Fqsen
     * @uses phpDocumentor\Reflection\FqsenResolver
     */
    public function testResolvingRelativeQSENsBasedOnNamespace()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::resolve
     * @covers ::<private>
     *
     * @uses phpDocumentor\Reflection\Types\Context
     * @uses phpDocumentor\Reflection\Types\Object_
     * @uses phpDocumentor\Reflection\Fqsen
     * @uses phpDocumentor\Reflection\FqsenResolver
     */
    public function testResolvingRelativeQSENsBasedOnNamespaceAlias()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::resolve
     * @covers ::<private>
     *
     * @uses phpDocumentor\Reflection\Types\Context
     * @uses phpDocumentor\Reflection\Types\Array_
     * @uses phpDocumentor\Reflection\Types\String_
     */
    public function testResolvingTypedArrays()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::resolve
     * @covers ::<private>
     *
     * @uses phpDocumentor\Reflection\Types\Context
     * @uses phpDocumentor\Reflection\Types\Array_
     * @uses phpDocumentor\Reflection\Types\String_
     */
    public function testResolvingNestedTypedArrays()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::resolve
     * @covers ::<private>
     *
     * @uses phpDocumentor\Reflection\Types\Context
     * @uses phpDocumentor\Reflection\Types\Compound
     * @uses phpDocumentor\Reflection\Types\String_
     * @uses phpDocumentor\Reflection\Types\Object_
     * @uses phpDocumentor\Reflection\Fqsen
     * @uses phpDocumentor\Reflection\FqsenResolver
     */
    public function testResolvingCompoundTypes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::resolve
     * @covers ::<private>
     *
     * @uses phpDocumentor\Reflection\Types\Context
     * @uses phpDocumentor\Reflection\Types\Compound
     * @uses phpDocumentor\Reflection\Types\Array_
     * @uses phpDocumentor\Reflection\Types\Object_
     * @uses phpDocumentor\Reflection\Fqsen
     * @uses phpDocumentor\Reflection\FqsenResolver
     */
    public function testResolvingCompoundTypedArrayTypes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This test asserts that the parameter order is correct.
     *
     * When you pass two arrays separated by the compound operator (i.e. 'integer[]|string[]') then we always split the
     * expression in its compound parts and then we parse the types with the array operators. If we were to switch the
     * order around then 'integer[]|string[]' would read as an array of string or integer array; which is something
     * other than what we intend.
     *
     * @covers ::__construct
     * @covers ::resolve
     * @covers ::<private>
     *
     * @uses phpDocumentor\Reflection\Types\Context
     * @uses phpDocumentor\Reflection\Types\Compound
     * @uses phpDocumentor\Reflection\Types\Array_
     * @uses phpDocumentor\Reflection\Types\Integer
     * @uses phpDocumentor\Reflection\Types\String_
     */
    public function testResolvingCompoundTypesWithTwoArrays()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::addKeyword
     * @uses phpDocumentor\Reflection\TypeResolver::resolve
     * @uses phpDocumentor\Reflection\TypeResolver::<private>
     * @uses phpDocumentor\Reflection\Types\Context
     */
    public function testAddingAKeyword()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::addKeyword
     * @uses phpDocumentor\Reflection\Types\Context
     * @expectedException \InvalidArgumentException
     */
    public function testAddingAKeywordFailsIfTypeClassDoesNotExist()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::addKeyword
     * @uses phpDocumentor\Reflection\Types\Context
     * @expectedException \InvalidArgumentException
     */
    public function testAddingAKeywordFailsIfTypeClassDoesNotImplementTypeInterface()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::resolve
     * @uses phpDocumentor\Reflection\Types\Context
     *
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsThrownIfTypeIsEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::resolve
     * @uses phpDocumentor\Reflection\Types\Context
     *
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsThrownIfTypeIsNotAString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a list of keywords and expected classes that are created from them.
     *
     * @return string[][]
     */
    public function provideKeywords()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provides a list of FQSENs to test the resolution patterns with.
     *
     * @return string[][]
     */
    public function provideFqcn()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
