<?php
/*
 * This file is part of the PHP_TokenStream package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Tests for the PHP_Token_INTERFACE class.
 *
 * @package    PHP_TokenStream
 * @subpackage Tests
 * @author     Sebastian Bergmann <sebastian@phpunit.de>
 * @author     Laurent Laville <pear@laurent-laville.org>
 * @copyright  Sebastian Bergmann <sebastian@phpunit.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @version    Release: @package_version@
 * @link       http://github.com/sebastianbergmann/php-token-stream/
 * @since      Class available since Release 1.0.0
 */
class PHP_Token_InterfaceTest extends PHPUnit_Framework_TestCase
{
    protected $class;
    protected $interfaces;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_Token_INTERFACE::getName
     */
    public function testGetName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_Token_INTERFACE::getParent
     */
    public function testGetParentNotExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_Token_INTERFACE::hasParent
     */
    public function testHasParentNotExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_Token_INTERFACE::getParent
     */
    public function testGetParentExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_Token_INTERFACE::hasParent
     */
    public function testHasParentExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_Token_INTERFACE::getInterfaces
     */
    public function testGetInterfacesExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_Token_INTERFACE::hasInterfaces
     */
    public function testHasInterfacesExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    /**
     * @covers PHP_Token_INTERFACE::getPackage
     */
    public function testGetPackageNamespace()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }


    public function provideFilesWithClassesWithinMultipleNamespaces()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider provideFilesWithClassesWithinMultipleNamespaces
     * @covers PHP_Token_INTERFACE::getPackage
     */
    public function testGetPackageNamespaceForFileWithMultipleNamespaces($filepath)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testGetPackageNamespaceIsEmptyForInterfacesThatAreNotWithinNamespaces()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_Token_INTERFACE::getPackage
     */
    public function testGetPackageNamespaceWhenExtentingFromNamespaceClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
