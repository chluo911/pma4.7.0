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
use phpDocumentor\Reflection\Types\Context;

/**
 * @coversDefaultClass phpDocumentor\Reflection\DocBlock
 * @covers ::<private>
 * @uses \Webmozart\Assert\Assert
 */
class DocBlockTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::getSummary
     *
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     */
    public function testDocBlockCanHaveASummary()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     *
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsThrownIfSummaryIsNotAString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     *
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsThrownIfTemplateStartIsNotABoolean()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     *
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsThrownIfTemplateEndIsNotABoolean()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::getDescription
     *
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     */
    public function testDocBlockCanHaveADescription()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::getTags
     *
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     * @uses \phpDocumentor\Reflection\DocBlock\Tag
     */
    public function testDocBlockCanHaveTags()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::getTags
     *
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     * @uses \phpDocumentor\Reflection\DocBlock\Tag
     *
     * @expectedException \InvalidArgumentException
     */
    public function testDocBlockAllowsOnlyTags()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::getTagsByName
     *
     * @uses \phpDocumentor\Reflection\DocBlock::getTags
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     * @uses \phpDocumentor\Reflection\DocBlock\Tag
     */
    public function testFindTagsInDocBlockByName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::getTagsByName
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsThrownIfNameForTagsIsNotString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::hasTag
     *
     * @uses \phpDocumentor\Reflection\DocBlock::getTags
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     * @uses \phpDocumentor\Reflection\DocBlock\Tag
     */
    public function testCheckIfThereAreTagsWithAGivenName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::hasTag
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     * @expectedException \InvalidArgumentException
     */
    public function testExceptionIsThrownIfNameForCheckingTagsIsNotString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::getContext
     *
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     * @uses \phpDocumentor\Reflection\Types\Context
     */
    public function testDocBlockKnowsInWhichNamespaceItIsAndWhichAliasesThereAre()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::getLocation
     *
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     * @uses \phpDocumentor\Reflection\Location
     */
    public function testDocBlockKnowsAtWhichLineItIs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::isTemplateStart
     *
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     */
    public function testDocBlockKnowsIfItIsTheStartOfADocBlockTemplate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::isTemplateEnd
     *
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     */
    public function testDocBlockKnowsIfItIsTheEndOfADocBlockTemplate()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
