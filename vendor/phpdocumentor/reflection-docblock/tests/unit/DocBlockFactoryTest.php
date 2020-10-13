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
use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\DescriptionFactory;
use phpDocumentor\Reflection\DocBlock\Tag;
use phpDocumentor\Reflection\DocBlock\TagFactory;
use phpDocumentor\Reflection\DocBlock\Tags\Param;
use phpDocumentor\Reflection\Types\Context;

/**
 * @coversDefaultClass phpDocumentor\Reflection\DocBlockFactory
 * @covers             ::<private>
 * @uses               \Webmozart\Assert\Assert
 * @uses               phpDocumentor\Reflection\DocBlock
 */
class DocBlockFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::createInstance
     * @uses \phpDocumentor\Reflection\DocBlock\StandardTagFactory
     * @uses \phpDocumentor\Reflection\DocBlock\DescriptionFactory
     */
    public function testCreateFactoryUsingFactoryMethod()
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
    public function testCreateDocBlockFromReflection()
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
    public function testCreateDocBlockFromStringWithDocComment()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::create
     * @covers ::__construct
     * @uses   phpDocumentor\Reflection\DocBlock\Description
     */
    public function testCreateDocBlockFromStringWithoutDocComment()
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
     * @uses         phpDocumentor\Reflection\DocBlock\DescriptionFactory
     * @uses         phpDocumentor\Reflection\DocBlock\Description
     * @dataProvider provideSummaryAndDescriptions
     */
    public function testSummaryAndDescriptionAreSeparated($given, $summary, $description)
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
     * @uses phpDocumentor\Reflection\DocBlock\DescriptionFactory
     * @uses phpDocumentor\Reflection\DocBlock\Description
     */
    public function testDescriptionsRetainFormatting()
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
     * @uses phpDocumentor\Reflection\DocBlock\DescriptionFactory
     * @uses phpDocumentor\Reflection\DocBlock\Description
     */
    public function testTagsAreInterpretedUsingFactory()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function provideSummaryAndDescriptions()
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
     *
     * @uses   phpDocumentor\Reflection\DocBlock\DescriptionFactory
     * @uses   phpDocumentor\Reflection\DocBlock\Description
     * @uses   phpDocumentor\Reflection\Types\Context
     * @uses   phpDocumentor\Reflection\DocBlock\Tags\Param
     */
    public function testTagsWithContextNamespace()
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
     *
     * @uses phpDocumentor\Reflection\DocBlock\DescriptionFactory
     * @uses phpDocumentor\Reflection\DocBlock\Description
     */
    public function testTagsAreFilteredForNullValues()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
