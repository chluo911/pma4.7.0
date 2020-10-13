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

namespace phpDocumentor\Reflection\Types {

// Added imports on purpose as mock for the unit tests, please do not remove.
    use Mockery as m;
    use phpDocumentor\Reflection\DocBlock;
    use phpDocumentor\Reflection\DocBlock\Tag;
    use phpDocumentor;
    use \ReflectionClass; // yes, the slash is part of the test

    /**
     * @coversDefaultClass \phpDocumentor\Reflection\Types\ContextFactory
     * @covers ::<private>
     */
    class ContextFactoryTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers ::createFromReflector
         * @covers ::createForNamespace
         * @uses phpDocumentor\Reflection\Types\Context
         */
        public function testReadsNamespaceFromClassReflection()
        {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
        }

        /**
         * @covers ::createFromReflector
         * @covers ::createForNamespace
         * @uses phpDocumentor\Reflection\Types\Context
         */
        public function testReadsAliasesFromClassReflection()
        {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
        }

        /**
         * @covers ::createForNamespace
         * @uses phpDocumentor\Reflection\Types\Context
         */
        public function testReadsNamespaceFromProvidedNamespaceAndContent()
        {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
        }

        /**
         * @covers ::createForNamespace
         * @uses phpDocumentor\Reflection\Types\Context
         */
        public function testReadsAliasesFromProvidedNamespaceAndContent()
        {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
        }

        /**
         * @covers ::createForNamespace
         * @uses phpDocumentor\Reflection\Types\Context
         */
        public function testTraitUseIsNotDetectedAsNamespaceUse()
        {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
        }

        /**
         * @covers ::createForNamespace
         * @uses phpDocumentor\Reflection\Types\Context
         */
        public function testAllOpeningBracesAreCheckedWhenSearchingForEndOfClass()
        {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
        }

        /**
         * @covers ::createFromReflector
         */
        public function testEmptyFileName()
        {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
        }

        /**
         * @covers ::createFromReflector
         */
        public function testEvalDClass()
        {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
        }
    }
}

namespace phpDocumentor\Reflection\Types\Mock {
    // the following import should not show in the tests above
    use phpDocumentor\Reflection\DocBlock\Description;

    }
