<?php
/**
 * phpDocumentor
 *
 * PHP Version 5.5
 *
 * @copyright 2010-2015 Mike van Riel / Naenius (http://www.naenius.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phpdoc.org
 */

namespace phpDocumentor\Reflection;

/**
 * Class FqsenTest
 * @coversDefaultClass phpDocumentor\Reflection\Fqsen
 */
class FqsenTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $fqsen
     * @covers ::__construct
     * @dataProvider validFqsenProvider
     */
    public function testValidFormats($fqsen, $name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Data provider for ValidFormats tests. Contains a complete list from psr-5 draft.
     *
     * @return array
     */
    public function validFqsenProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $fqsen
     * @covers ::__construct
     * @dataProvider invalidFqsenProvider
     * @expectedException \InvalidArgumentException
     */
    public function testInValidFormats($fqsen)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Data provider for invalidFormats tests. Contains a complete list from psr-5 draft.
     *
     * @return array
     */
    public function invalidFqsenProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers ::__construct
     * @covers ::__toString
     */
    public function testToString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
