<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (!defined('TEST_FILES_PATH')) {
    define(
        'TEST_FILES_PATH',
        dirname(__DIR__) . DIRECTORY_SEPARATOR .
        '_files' . DIRECTORY_SEPARATOR
    );
}

require TEST_FILES_PATH . 'CoverageNamespacedFunctionTest.php';
require TEST_FILES_PATH . 'NamespaceCoveredFunction.php';

/**
 * @since      Class available since Release 3.3.6
 */
class Util_TestTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers PHPUnit_Util_Test::getExpectedException
     *
     * @todo   Split up in separate tests
     */
    public function testGetExpectedException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getExpectedException
     */
    public function testGetExpectedRegExp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers       PHPUnit_Util_Test::getRequirements
     * @dataProvider requirementsProvider
     */
    public function testGetRequirements($test, $result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function requirementsProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getRequirements
     */
    public function testGetRequirementsMergesClassAndMethodDocBlocks()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers       PHPUnit_Util_Test::getMissingRequirements
     * @dataProvider missingRequirementsProvider
     */
    public function testGetMissingRequirements($test, $result)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function missingRequirementsProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @coversNothing
     *
     * @todo   This test does not really test functionality of PHPUnit_Util_Test
     */
    public function testGetProvidedDataRegEx()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getDataFromTestWithAnnotation
     */
    public function testTestWithEmptyAnnotation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getDataFromTestWithAnnotation
     */
    public function testTestWithSimpleCase()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getDataFromTestWithAnnotation
     */
    public function testTestWithMultiLineMultiParameterCase()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getDataFromTestWithAnnotation
     */
    public function testTestWithVariousTypes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getDataFromTestWithAnnotation
     */
    public function testTestWithAnnotationAfter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getDataFromTestWithAnnotation
     */
    public function testTestWithSimpleTextAfter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getDataFromTestWithAnnotation
     */
    public function testTestWithCharacterEscape()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getDataFromTestWithAnnotation
     */
    public function testTestWithThrowsProperExceptionIfDatasetCannotBeParsed()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testTestWithThrowsProperExceptionIfMultiLineDatasetCannotBeParsed()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getDependencies
     *
     * @todo   Not sure what this test tests (name is misleading at least)
     */
    public function testParseAnnotation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @depends Foo
     * @depends ほげ
     *
     * @todo    Remove fixture from test class
     */
    public function methodForTestParseAnnotation()
    {
    }

    /**
     * @covers PHPUnit_Util_Test::getDependencies
     */
    public function testParseAnnotationThatIsOnlyOneLine()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /** @depends Bar */
    public function methodForTestParseAnnotationThatIsOnlyOneLine()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers       PHPUnit_Util_Test::getLinesToBeCovered
     * @covers       PHPUnit_Util_Test::getLinesToBeCoveredOrUsed
     * @covers       PHPUnit_Util_Test::resolveElementToReflectionObjects
     * @dataProvider getLinesToBeCoveredProvider
     */
    public function testGetLinesToBeCovered($test, $lines)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Util_Test::getLinesToBeCovered
     * @covers            PHPUnit_Util_Test::getLinesToBeCoveredOrUsed
     * @covers            PHPUnit_Util_Test::resolveElementToReflectionObjects
     * @expectedException PHPUnit_Framework_CodeCoverageException
     */
    public function testGetLinesToBeCovered2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Util_Test::getLinesToBeCovered
     * @covers            PHPUnit_Util_Test::getLinesToBeCoveredOrUsed
     * @covers            PHPUnit_Util_Test::resolveElementToReflectionObjects
     * @expectedException PHPUnit_Framework_CodeCoverageException
     */
    public function testGetLinesToBeCovered3()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Util_Test::getLinesToBeCovered
     * @covers            PHPUnit_Util_Test::getLinesToBeCoveredOrUsed
     * @covers            PHPUnit_Util_Test::resolveElementToReflectionObjects
     * @expectedException PHPUnit_Framework_CodeCoverageException
     */
    public function testGetLinesToBeCovered4()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getLinesToBeCovered
     * @covers PHPUnit_Util_Test::getLinesToBeCoveredOrUsed
     */
    public function testGetLinesToBeCoveredSkipsNonExistentMethods()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Util_Test::getLinesToBeCovered
     * @covers            PHPUnit_Util_Test::getLinesToBeCoveredOrUsed
     * @expectedException PHPUnit_Framework_CodeCoverageException
     */
    public function testTwoCoversDefaultClassAnnoationsAreNotAllowed()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getLinesToBeCovered
     * @covers PHPUnit_Util_Test::getLinesToBeCoveredOrUsed
     */
    public function testFunctionParenthesesAreAllowed()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getLinesToBeCovered
     * @covers PHPUnit_Util_Test::getLinesToBeCoveredOrUsed
     */
    public function testFunctionParenthesesAreAllowedWithWhitespace()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getLinesToBeCovered
     * @covers PHPUnit_Util_Test::getLinesToBeCoveredOrUsed
     */
    public function testMethodParenthesesAreAllowed()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getLinesToBeCovered
     * @covers PHPUnit_Util_Test::getLinesToBeCoveredOrUsed
     */
    public function testMethodParenthesesAreAllowedWithWhitespace()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Test::getLinesToBeCovered
     * @covers PHPUnit_Util_Test::getLinesToBeCoveredOrUsed
     */
    public function testNamespacedFunctionCanBeCoveredOrUsed()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getLinesToBeCoveredProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
