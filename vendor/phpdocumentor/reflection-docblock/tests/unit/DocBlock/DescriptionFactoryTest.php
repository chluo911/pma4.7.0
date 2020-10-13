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
use phpDocumentor\Reflection\DocBlock\Tags\Link;
use phpDocumentor\Reflection\Types\Context;

/**
 * @coversDefaultClass \phpDocumentor\Reflection\DocBlock\DescriptionFactory
 * @covers ::<private>
 */
class DescriptionFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::create
     * @uses         phpDocumentor\Reflection\DocBlock\Description
     * @dataProvider provideSimpleExampleDescriptions
     */
    public function testDescriptionCanParseASimpleString($contents)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::create
     * @uses         phpDocumentor\Reflection\DocBlock\Description
     * @dataProvider provideEscapeSequences
     */
    public function testEscapeSequences($contents, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::create
     * @uses   phpDocumentor\Reflection\DocBlock\Description
     * @uses   phpDocumentor\Reflection\DocBlock\Tags\Link
     * @uses   phpDocumentor\Reflection\DocBlock\Tags\BaseTag
     * @uses   phpDocumentor\Reflection\DocBlock\Tags\Formatter\PassthroughFormatter
     * @uses   phpDocumentor\Reflection\Types\Context
     */
    public function testDescriptionCanParseAStringWithInlineTag()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::create
     * @uses   phpDocumentor\Reflection\DocBlock\Description
     * @uses   phpDocumentor\Reflection\DocBlock\Tags\Link
     * @uses   phpDocumentor\Reflection\DocBlock\Tags\BaseTag
     * @uses   phpDocumentor\Reflection\DocBlock\Tags\Formatter\PassthroughFormatter
     * @uses   phpDocumentor\Reflection\Types\Context
     */
    public function testDescriptionCanParseAStringStartingWithInlineTag()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::create
     * @uses   phpDocumentor\Reflection\DocBlock\Description
     */
    public function testIfSuperfluousStartingSpacesAreRemoved()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provides a series of example strings that the parser should correctly interpret and return.
     *
     * @return string[][]
     */
    public function provideSimpleExampleDescriptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideEscapeSequences()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
