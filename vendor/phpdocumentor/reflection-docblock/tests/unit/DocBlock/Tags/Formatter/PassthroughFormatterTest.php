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

namespace phpDocumentor\Reflection\DocBlock\Tags\Formatter;

use Mockery as m;
use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\Tags\Generic;

/**
 * @coversDefaultClass \phpDocumentor\Reflection\DocBlock\Tags\Formatter\PassthroughFormatter
 */
class PassthroughFormatterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::format
     * @uses \phpDocumentor\Reflection\DocBlock\Description
     * @uses \phpDocumentor\Reflection\DocBlock\Tags\BaseTag
     * @uses \phpDocumentor\Reflection\DocBlock\Tags\Generic
     */
    public function testFormatterCallsToStringAndReturnsAStandardRepresentation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
