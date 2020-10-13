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

namespace phpDocumentor\Reflection\DocBlock;

use Mockery as m;
use phpDocumentor\Reflection\DocBlock;

/**
 * @coversDefaultClass \phpDocumentor\Reflection\DocBlock\Serializer
 * @covers ::<private>
 */
class SerializerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::getDocComment
     * @uses phpDocumentor\Reflection\DocBlock\Description
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Formatter\PassthroughFormatter
     * @uses phpDocumentor\Reflection\DocBlock
     * @uses phpDocumentor\Reflection\DocBlock\Tags\BaseTag
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Generic
     */
    public function testReconstructsADocCommentFromADocBlock()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::getDocComment
     * @uses phpDocumentor\Reflection\DocBlock\Description
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Formatter\PassthroughFormatter
     * @uses phpDocumentor\Reflection\DocBlock
     * @uses phpDocumentor\Reflection\DocBlock\Tags\BaseTag
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Generic
     */
    public function testAddPrefixToDocBlock()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::getDocComment
     * @uses phpDocumentor\Reflection\DocBlock\Description
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Formatter\PassthroughFormatter
     * @uses phpDocumentor\Reflection\DocBlock
     * @uses phpDocumentor\Reflection\DocBlock\Tags\BaseTag
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Generic
     */
    public function testAddPrefixToDocBlockExceptFirstLine()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::getDocComment
     * @uses phpDocumentor\Reflection\DocBlock\Description
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Formatter\PassthroughFormatter
     * @uses phpDocumentor\Reflection\DocBlock
     * @uses phpDocumentor\Reflection\DocBlock\Tags\BaseTag
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Generic
     */
    public function testWordwrapsAroundTheGivenAmountOfCharacters()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @expectedException \InvalidArgumentException
     */
    public function testInitializationFailsIfIndentIsNotAnInteger()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @expectedException \InvalidArgumentException
     */
    public function testInitializationFailsIfIndentStringIsNotAString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @expectedException \InvalidArgumentException
     */
    public function testInitializationFailsIfIndentFirstLineIsNotABoolean()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @expectedException \InvalidArgumentException
     */
    public function testInitializationFailsIfLineLengthIsNotNullNorAnInteger()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
