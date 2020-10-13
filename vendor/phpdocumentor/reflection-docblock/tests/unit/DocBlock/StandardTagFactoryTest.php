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
use phpDocumentor\Reflection\DocBlock\Tags\Author;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter;
use phpDocumentor\Reflection\DocBlock\Tags\Formatter\PassthroughFormatter;
use phpDocumentor\Reflection\DocBlock\Tags\Generic;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use phpDocumentor\Reflection\DocBlock\Tags\See;
use phpDocumentor\Reflection\Fqsen;
use phpDocumentor\Reflection\FqsenResolver;
use phpDocumentor\Reflection\TypeResolver;
use phpDocumentor\Reflection\Types\Context;

/**
 * @coversDefaultClass phpDocumentor\Reflection\DocBlock\StandardTagFactory
 * @covers ::<private>
 */
class StandardTagFactoryTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers ::__construct
     * @covers ::create
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Generic
     * @uses phpDocumentor\Reflection\DocBlock\Tags\BaseTag
     * @uses phpDocumentor\Reflection\DocBlock\Description
     */
    public function testCreatingAGenericTag()
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
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Author
     * @uses phpDocumentor\Reflection\DocBlock\Tags\BaseTag
     */
    public function testCreatingASpecificTag()
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
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @uses phpDocumentor\Reflection\DocBlock\Tags\See
     * @uses phpDocumentor\Reflection\DocBlock\Tags\BaseTag
     */
    public function testAnEmptyContextIsCreatedIfNoneIsProvided()
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
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Author
     * @uses phpDocumentor\Reflection\DocBlock\Tags\BaseTag
     */
    public function testPassingYourOwnSetOfTagHandlers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::create
     * @uses                     phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     * @uses                     phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The tag "@user/myuser" does not seem to be wellformed, please check it for errors
     */
    public function testExceptionIsThrownIfProvidedTagIsNotWellformed()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::addParameter
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     */
    public function testAddParameterToServiceLocator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::addService
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     */
    public function testAddServiceToServiceLocator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::addService
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     */
    public function testInjectConcreteServiceForInterfaceToServiceLocator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::registerTagHandler
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::create
     * @uses phpDocumentor\Reflection\DocBlock\Tags\Author
     */
    public function testRegisteringAHandlerForANewTag()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::registerTagHandler
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @expectedException \InvalidArgumentException
     */
    public function testHandlerRegistrationFailsIfProvidedTagNameIsNotAString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::registerTagHandler
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @expectedException \InvalidArgumentException
     */
    public function testHandlerRegistrationFailsIfProvidedTagNameIsEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::registerTagHandler
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @expectedException \InvalidArgumentException
     */
    public function testHandlerRegistrationFailsIfProvidedTagNameIsNamespaceButNotFullyQualified()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::registerTagHandler
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @expectedException \InvalidArgumentException
     */
    public function testHandlerRegistrationFailsIfProvidedHandlerIsNotAString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::registerTagHandler
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @expectedException \InvalidArgumentException
     */
    public function testHandlerRegistrationFailsIfProvidedHandlerIsEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::registerTagHandler
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @expectedException \InvalidArgumentException
     */
    public function testHandlerRegistrationFailsIfProvidedHandlerIsNotAnExistingClassName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::registerTagHandler
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @expectedException \InvalidArgumentException
     */
    public function testHandlerRegistrationFailsIfProvidedHandlerDoesNotImplementTheTagInterface()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::create
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::__construct
     * @uses phpDocumentor\Reflection\DocBlock\StandardTagFactory::addService
     * @uses phpDocumentor\Reflection\Docblock\Description
     * @uses phpDocumentor\Reflection\Docblock\Tags\Return_
     * @uses phpDocumentor\Reflection\Docblock\Tags\BaseTag
     */
    public function testReturntagIsMappedCorrectly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
