<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @since      Class available since Release 2.0.0
 */
class Framework_AssertTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    private $filesDirectory;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::fail
     */
    public function testFail()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
    public function testAssertSplObjectStorageContainsObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
    public function testAssertArrayContainsObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
    public function testAssertArrayContainsString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
    public function testAssertArrayContainsNonObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertContainsOnlyInstancesOf
     */
    public function testAssertContainsOnlyInstancesOf()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertArrayHasKey
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertArrayHasKeyThrowsExceptionForInvalidFirstArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertArrayHasKey
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertArrayHasKeyThrowsExceptionForInvalidSecondArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
     */
    public function testAssertArrayHasIntegerKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArraySubset
     * @covers PHPUnit_Framework_Constraint_ArraySubset
     */
    public function testAssertArraySubset()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArraySubset
     * @covers PHPUnit_Framework_Constraint_ArraySubset
     */
    public function testAssertArraySubsetWithDeepNestedArrays()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArraySubset
     * @covers PHPUnit_Framework_Constraint_ArraySubset
     */
    public function testAssertArraySubsetWithNoStrictCheckAndObjects()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArraySubset
     * @covers PHPUnit_Framework_Constraint_ArraySubset
     */
    public function testAssertArraySubsetWithStrictCheckAndObjects()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArraySubset
     * @covers PHPUnit_Framework_Constraint_ArraySubset
     * @expectedException PHPUnit_Framework_Exception
     * @expectedExceptionMessage array or ArrayAccess
     * @dataProvider assertArraySubsetInvalidArgumentProvider
     */
    public function testAssertArraySubsetRaisesExceptionForInvalidArguments($partial, $subject)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array
     */
    public function assertArraySubsetInvalidArgumentProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertArrayNotHasKey
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertArrayNotHasKeyThrowsExceptionForInvalidFirstArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertArrayNotHasKey
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertArrayNotHasKeyThrowsExceptionForInvalidSecondArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArrayNotHasKey
     */
    public function testAssertArrayNotHasIntegerKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
     */
    public function testAssertArrayHasStringKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArrayNotHasKey
     */
    public function testAssertArrayNotHasStringKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
     */
    public function testAssertArrayHasKeyAcceptsArrayObjectValue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertArrayHasKeyProperlyFailsWithArrayObjectValue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
     */
    public function testAssertArrayHasKeyAcceptsArrayAccessValue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertArrayHasKeyProperlyFailsWithArrayAccessValue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArrayNotHasKey
     */
    public function testAssertArrayNotHasKeyAcceptsArrayAccessValue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertArrayNotHasKey
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertArrayNotHasKeyPropertlyFailsWithArrayAccessValue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertContains
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertContainsThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
    public function testAssertIteratorContainsObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
    public function testAssertIteratorContainsString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
    public function testAssertStringContainsString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertNotContains
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotContainsThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
    public function testAssertSplObjectStorageNotContainsObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
    public function testAssertArrayNotContainsObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
    public function testAssertArrayNotContainsString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
    public function testAssertArrayNotContainsNonObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
    public function testAssertStringNotContainsString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertContainsOnly
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertContainsOnlyThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertNotContainsOnly
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotContainsOnlyThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertContainsOnlyInstancesOf
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertContainsOnlyInstancesOfThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertContainsOnly
     */
    public function testAssertArrayContainsOnlyIntegers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotContainsOnly
     */
    public function testAssertArrayNotContainsOnlyIntegers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertContainsOnly
     */
    public function testAssertArrayContainsOnlyStdClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotContainsOnly
     */
    public function testAssertArrayNotContainsOnlyStdClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function sameValues()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function notEqualValues()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function equalValues()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function equalProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function notEqualProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function sameProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function notSameProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertEquals
     * @dataProvider equalProvider
     */
    public function testAssertEqualsSucceeds($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertEquals
     * @dataProvider notEqualProvider
     */
    public function testAssertEqualsFails($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotEquals
     * @dataProvider notEqualProvider
     */
    public function testAssertNotEqualsSucceeds($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotEquals
     * @dataProvider equalProvider
     */
    public function testAssertNotEqualsFails($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertSame
     * @dataProvider sameProvider
     */
    public function testAssertSameSucceeds($a, $b)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertSame
     * @dataProvider notSameProvider
     */
    public function testAssertSameFails($a, $b)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotSame
     * @dataProvider notSameProvider
     */
    public function testAssertNotSameSucceeds($a, $b)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotSame
     * @dataProvider sameProvider
     */
    public function testAssertNotSameFails($a, $b)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertXmlFileEqualsXmlFile
     */
    public function testAssertXmlFileEqualsXmlFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertXmlFileNotEqualsXmlFile
     */
    public function testAssertXmlFileNotEqualsXmlFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertXmlStringEqualsXmlFile
     */
    public function testAssertXmlStringEqualsXmlFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertXmlStringNotEqualsXmlFile
     */
    public function testXmlStringNotEqualsXmlFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertXmlStringEqualsXmlString
     */
    public function testAssertXmlStringEqualsXmlString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException PHPUnit_Framework_Exception
     * @covers            PHPUnit_Framework_Assert::assertXmlStringEqualsXmlString
     * @ticket            1860
     */
    public function testAssertXmlStringEqualsXmlString2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertXmlStringEqualsXmlString
     * @ticket 1860
     */
    public function testAssertXmlStringEqualsXmlString3()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertXmlStringNotEqualsXmlString
     */
    public function testAssertXmlStringNotEqualsXmlString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertEqualXMLStructure
     */
    public function testXMLStructureIsSame()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertEqualXMLStructure
     * @expectedException PHPUnit_Framework_ExpectationFailedException
     */
    public function testXMLStructureWrongNumberOfAttributes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertEqualXMLStructure
     * @expectedException PHPUnit_Framework_ExpectationFailedException
     */
    public function testXMLStructureWrongNumberOfNodes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertEqualXMLStructure
     */
    public function testXMLStructureIsSameButDataIsNot()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertEqualXMLStructure
     */
    public function testXMLStructureAttributesAreSameButValuesAreNot()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertEqualXMLStructure
     */
    public function testXMLStructureIgnoreTextNodes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertEquals
     */
    public function testAssertStringEqualsNumeric()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotEquals
     */
    public function testAssertStringEqualsNumeric2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertFileExists
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertFileExistsThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertFileExists
     */
    public function testAssertFileExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertFileNotExists
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertFileNotExistsThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertFileNotExists
     */
    public function testAssertFileNotExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertObjectHasAttribute
     */
    public function testAssertObjectHasAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     */
    public function testAssertObjectNotHasAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNull
     */
    public function testAssertNull()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotNull
     */
    public function testAssertNotNull()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertTrue
     */
    public function testAssertTrue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotTrue
     */
    public function testAssertNotTrue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertFalse
     */
    public function testAssertFalse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotFalse
     */
    public function testAssertNotFalse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertRegExp
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertRegExpThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertRegExp
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertRegExpThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertNotRegExp
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotRegExpThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertNotRegExp
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotRegExpThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertRegExp
     */
    public function testAssertRegExp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotRegExp
     */
    public function testAssertNotRegExp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertSame
     */
    public function testAssertSame()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertSame
     */
    public function testAssertSame2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotSame
     */
    public function testAssertNotSame()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotSame
     */
    public function testAssertNotSame2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotSame
     */
    public function testAssertNotSameFailsNull()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertGreaterThan
     */
    public function testGreaterThan()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeGreaterThan
     */
    public function testAttributeGreaterThan()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertGreaterThanOrEqual
     */
    public function testGreaterThanOrEqual()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeGreaterThanOrEqual
     */
    public function testAttributeGreaterThanOrEqual()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertLessThan
     */
    public function testLessThan()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeLessThan
     */
    public function testAttributeLessThan()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertLessThanOrEqual
     */
    public function testLessThanOrEqual()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeLessThanOrEqual
     */
    public function testAttributeLessThanOrEqual()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::readAttribute
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
     */
    public function testReadAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::readAttribute
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
     */
    public function testReadAttribute2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::readAttribute
     * @covers            PHPUnit_Framework_Assert::getStaticAttribute
     * @covers            PHPUnit_Framework_Assert::getObjectAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testReadAttribute3()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::readAttribute
     * @covers            PHPUnit_Framework_Assert::getStaticAttribute
     * @covers            PHPUnit_Framework_Assert::getObjectAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testReadAttribute4()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::readAttribute
     * @covers            PHPUnit_Framework_Assert::getStaticAttribute
     * @covers            PHPUnit_Framework_Assert::getObjectAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testReadAttribute5()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::readAttribute
     * @covers            PHPUnit_Framework_Assert::getStaticAttribute
     * @covers            PHPUnit_Framework_Assert::getObjectAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testReadAttributeIfAttributeNameIsNotValid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetStaticAttributeRaisesExceptionForInvalidFirstArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetStaticAttributeRaisesExceptionForInvalidFirstArgument2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument3()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetObjectAttributeRaisesExceptionForInvalidFirstArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument3()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
     */
    public function testGetObjectAttributeWorksForInheritedAttributes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeContains
     */
    public function testAssertPublicAttributeContains()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeContainsOnly
     */
    public function testAssertPublicAttributeContainsOnly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotContains
     */
    public function testAssertPublicAttributeNotContains()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotContainsOnly
     */
    public function testAssertPublicAttributeNotContainsOnly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeContains
     */
    public function testAssertProtectedAttributeContains()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotContains
     */
    public function testAssertProtectedAttributeNotContains()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeContains
     */
    public function testAssertPrivateAttributeContains()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotContains
     */
    public function testAssertPrivateAttributeNotContains()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeContains
     */
    public function testAssertAttributeContainsNonObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotContains
     */
    public function testAssertAttributeNotContainsNonObject()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
    public function testAssertPublicAttributeEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
    public function testAssertPublicAttributeNotEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeSame
     */
    public function testAssertPublicAttributeSame()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotSame
     */
    public function testAssertPublicAttributeNotSame()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
    public function testAssertProtectedAttributeEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
    public function testAssertProtectedAttributeNotEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
    public function testAssertPrivateAttributeEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
    public function testAssertPrivateAttributeNotEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
    public function testAssertPublicStaticAttributeEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
    public function testAssertPublicStaticAttributeNotEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
    public function testAssertProtectedStaticAttributeEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
    public function testAssertProtectedStaticAttributeNotEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
    public function testAssertPrivateStaticAttributeEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
    public function testAssertPrivateStaticAttributeNotEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasAttributeThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasAttributeThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasAttributeThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasAttributeThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassHasStaticAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasStaticAttributeThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassHasStaticAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasStaticAttributeThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassHasStaticAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasStaticAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasStaticAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasStaticAttributeThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasStaticAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasStaticAttributeThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasStaticAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasStaticAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertObjectHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectHasAttributeThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertObjectHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectHasAttributeThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertObjectHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectNotHasAttributeThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectNotHasAttributeThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectNotHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertClassHasAttribute
     */
    public function testClassHasPublicAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertClassNotHasAttribute
     */
    public function testClassNotHasPublicAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertClassHasStaticAttribute
     */
    public function testClassHasPublicStaticAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertClassNotHasStaticAttribute
     */
    public function testClassNotHasPublicStaticAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertObjectHasAttribute
     */
    public function testObjectHasPublicAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     */
    public function testObjectNotHasPublicAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertObjectHasAttribute
     */
    public function testObjectHasOnTheFlyAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     */
    public function testObjectNotHasOnTheFlyAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertObjectHasAttribute
     */
    public function testObjectHasProtectedAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     */
    public function testObjectNotHasProtectedAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertObjectHasAttribute
     */
    public function testObjectHasPrivateAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     */
    public function testObjectNotHasPrivateAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::attribute
     * @covers PHPUnit_Framework_Assert::equalTo
     */
    public function testAssertThatAttributeEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertThat
     * @covers            PHPUnit_Framework_Assert::attribute
     * @covers            PHPUnit_Framework_Assert::equalTo
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertThatAttributeEquals2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::attribute
     * @covers PHPUnit_Framework_Assert::equalTo
     */
    public function testAssertThatAttributeEqualTo()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::anything
     */
    public function testAssertThatAnything()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isTrue
     */
    public function testAssertThatIsTrue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isFalse
     */
    public function testAssertThatIsFalse()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isJson
     */
    public function testAssertThatIsJson()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::anything
     * @covers PHPUnit_Framework_Assert::logicalAnd
     */
    public function testAssertThatAnythingAndAnything()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::anything
     * @covers PHPUnit_Framework_Assert::logicalOr
     */
    public function testAssertThatAnythingOrAnything()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::anything
     * @covers PHPUnit_Framework_Assert::logicalNot
     * @covers PHPUnit_Framework_Assert::logicalXor
     */
    public function testAssertThatAnythingXorNotAnything()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::contains
     */
    public function testAssertThatContains()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::stringContains
     */
    public function testAssertThatStringContains()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::containsOnly
     */
    public function testAssertThatContainsOnly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::containsOnlyInstancesOf
     */
    public function testAssertThatContainsOnlyInstancesOf()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::arrayHasKey
     */
    public function testAssertThatArrayHasKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::classHasAttribute
     */
    public function testAssertThatClassHasAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::classHasStaticAttribute
     */
    public function testAssertThatClassHasStaticAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::objectHasAttribute
     */
    public function testAssertThatObjectHasAttribute()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::equalTo
     */
    public function testAssertThatEqualTo()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::identicalTo
     */
    public function testAssertThatIdenticalTo()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isInstanceOf
     */
    public function testAssertThatIsInstanceOf()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isType
     */
    public function testAssertThatIsType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isEmpty
     */
    public function testAssertThatIsEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::fileExists
     */
    public function testAssertThatFileExists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::greaterThan
     */
    public function testAssertThatGreaterThan()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::greaterThanOrEqual
     */
    public function testAssertThatGreaterThanOrEqual()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::lessThan
     */
    public function testAssertThatLessThan()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::lessThanOrEqual
     */
    public function testAssertThatLessThanOrEqual()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::matchesRegularExpression
     */
    public function testAssertThatMatchesRegularExpression()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::callback
     */
    public function testAssertThatCallback()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::countOf
     */
    public function testAssertThatCountOf()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertFileEquals
     */
    public function testAssertFileEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertFileNotEquals
     */
    public function testAssertFileNotEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringEqualsFile
     */
    public function testAssertStringEqualsFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringNotEqualsFile
     */
    public function testAssertStringNotEqualsFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertStringStartsWith
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringStartsWithThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertStringStartsWith
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringStartsWithThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertStringStartsNotWith
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringStartsNotWithThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertStringStartsNotWith
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringStartsNotWithThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertStringEndsWith
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringEndsWithThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertStringEndsWith
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringEndsWithThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertStringEndsNotWith
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringEndsNotWithThrowsException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers            PHPUnit_Framework_Assert::assertStringEndsNotWith
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringEndsNotWithThrowsException2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringStartsWith
     */
    public function testAssertStringStartsWith()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringStartsNotWith
     */
    public function testAssertStringStartsNotWith()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringEndsWith
     */
    public function testAssertStringEndsWith()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringEndsNotWith
     */
    public function testAssertStringEndsNotWith()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormat
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringMatchesFormatRaisesExceptionForInvalidFirstArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormat
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringMatchesFormatRaisesExceptionForInvalidSecondArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormat
     */
    public function testAssertStringMatchesFormat()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormat
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertStringMatchesFormatFailure()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormat
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringNotMatchesFormatRaisesExceptionForInvalidFirstArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormat
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringNotMatchesFormatRaisesExceptionForInvalidSecondArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormat
     */
    public function testAssertStringNotMatchesFormat()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertEmpty
     */
    public function testAssertEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotEmpty
     */
    public function testAssertNotEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEmpty
     */
    public function testAssertAttributeEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEmpty
     */
    public function testAssertAttributeNotEmpty()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::markTestIncomplete
     */
    public function testMarkTestIncomplete()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::markTestSkipped
     */
    public function testMarkTestSkipped()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertCount
     */
    public function testAssertCount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertCount
     */
    public function testAssertCountTraversable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertCount
     */
    public function testAssertCountThrowsExceptionIfExpectedCountIsNoInteger()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertCount
     */
    public function testAssertCountThrowsExceptionIfElementIsNotCountable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeCount
     */
    public function testAssertAttributeCount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotCount
     */
    public function testAssertNotCount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotCount
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotCountThrowsExceptionIfExpectedCountIsNoInteger()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotCount
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotCountThrowsExceptionIfElementIsNotCountable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotCount
     */
    public function testAssertAttributeNotCount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertSameSize
     */
    public function testAssertSameSize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertSameSize
     */
    public function testAssertSameSizeThrowsExceptionIfExpectedIsNotCountable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertSameSize
     */
    public function testAssertSameSizeThrowsExceptionIfActualIsNotCountable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotSameSize
     */
    public function testAssertNotSameSize()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotSameSize
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotSameSizeThrowsExceptionIfExpectedIsNotCountable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotSameSize
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotSameSizeThrowsExceptionIfActualIsNotCountable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertJson
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertJsonRaisesExceptionForInvalidArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertJson
     */
    public function testAssertJson()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringEqualsJsonString
     */
    public function testAssertJsonStringEqualsJsonString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider validInvalidJsonDataprovider
     * @covers PHPUnit_Framework_Assert::assertJsonStringEqualsJsonString
     */
    public function testAssertJsonStringEqualsJsonStringErrorRaised($expected, $actual)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonString
     */
    public function testAssertJsonStringNotEqualsJsonString()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider validInvalidJsonDataprovider
     * @covers PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonString
     */
    public function testAssertJsonStringNotEqualsJsonStringErrorRaised($expected, $actual)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringEqualsJsonFile
     */
    public function testAssertJsonStringEqualsJsonFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringEqualsJsonFile
     */
    public function testAssertJsonStringEqualsJsonFileExpectingExpectationFailedException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringEqualsJsonFile
     */
    public function testAssertJsonStringEqualsJsonFileExpectingException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonFile
     */
    public function testAssertJsonStringNotEqualsJsonFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonFile
     */
    public function testAssertJsonStringNotEqualsJsonFileExpectingException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertJsonFileNotEqualsJsonFile
     */
    public function testAssertJsonFileNotEqualsJsonFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertJsonFileEqualsJsonFile
     */
    public function testAssertJsonFileEqualsJsonFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertInstanceOf
     */
    public function testAssertInstanceOf()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertInstanceOf
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertInstanceOfThrowsExceptionForInvalidArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeInstanceOf
     */
    public function testAssertAttributeInstanceOf()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotInstanceOf
     */
    public function testAssertNotInstanceOf()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotInstanceOf
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotInstanceOfThrowsExceptionForInvalidArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotInstanceOf
     */
    public function testAssertAttributeNotInstanceOf()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertInternalType
     */
    public function testAssertInternalType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertInternalType
     */
    public function testAssertInternalTypeDouble()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertInternalType
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertInternalTypeThrowsExceptionForInvalidArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeInternalType
     */
    public function testAssertAttributeInternalType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotInternalType
     */
    public function testAssertNotInternalType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertNotInternalType
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotInternalTypeThrowsExceptionForInvalidArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotInternalType
     */
    public function testAssertAttributeNotInternalType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormatFile
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringMatchesFormatFileThrowsExceptionForInvalidArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormatFile
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringMatchesFormatFileThrowsExceptionForInvalidArgument2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormatFile
     */
    public function testAssertStringMatchesFormatFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormatFile
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringNotMatchesFormatFileThrowsExceptionForInvalidArgument()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormatFile
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringNotMatchesFormatFileThrowsExceptionForInvalidArgument2()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormatFile
     */
    public function testAssertStringNotMatchesFormatFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return array
     */
    public static function validInvalidJsonDataprovider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
