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
 * Returns a matcher that matches when the method is executed
 * zero or more times.
 *
 * @return PHPUnit_Framework_MockObject_Matcher_AnyInvokedCount
 *
 * @since  Method available since Release 3.0.0
 */
function any()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsAnything matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsAnything
 *
 * @since  Method available since Release 3.0.0
 */
function anything()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_ArrayHasKey matcher object.
 *
 * @param mixed $key
 *
 * @return PHPUnit_Framework_Constraint_ArrayHasKey
 *
 * @since  Method available since Release 3.0.0
 */
function arrayHasKey($key)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an array has a specified key.
 *
 * @param mixed             $key
 * @param array|ArrayAccess $array
 * @param string            $message
 *
 * @since  Method available since Release 3.0.0
 */
function assertArrayHasKey($key, $array, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an array has a specified subset.
 *
 * @param array|ArrayAccess $subset
 * @param array|ArrayAccess $array
 * @param bool              $strict  Check for object identity
 * @param string            $message
 *
 * @since Method available since Release 4.4.0
 */
function assertArraySubset($subset, $array, $strict = false, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an array does not have a specified key.
 *
 * @param mixed             $key
 * @param array|ArrayAccess $array
 * @param string            $message
 *
 * @since  Method available since Release 3.0.0
 */
function assertArrayNotHasKey($key, $array, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object contains a needle.
 *
 * @param mixed  $needle
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 * @param bool   $ignoreCase
 * @param bool   $checkForObjectIdentity
 * @param bool   $checkForNonObjectIdentity
 *
 * @since  Method available since Release 3.0.0
 */
function assertAttributeContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object contains only values of a given type.
 *
 * @param string $type
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param bool   $isNativeType
 * @param string $message
 *
 * @since  Method available since Release 3.1.4
 */
function assertAttributeContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = null, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts the number of elements of an array, Countable or Traversable
 * that is stored in an attribute.
 *
 * @param int    $expectedCount
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 *
 * @since Method available since Release 3.6.0
 */
function assertAttributeCount($expectedCount, $haystackAttributeName, $haystackClassOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a static attribute of a class or an attribute of an object
 * is empty.
 *
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 *
 * @since Method available since Release 3.5.0
 */
function assertAttributeEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable is equal to an attribute of an object.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
 * @param float  $delta
 * @param int    $maxDepth
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 */
function assertAttributeEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an attribute is greater than another value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertAttributeGreaterThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an attribute is greater than or equal to another value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertAttributeGreaterThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 *
 * @since Method available since Release 3.5.0
 */
function assertAttributeInstanceOf($expected, $attributeName, $classOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 *
 * @since Method available since Release 3.5.0
 */
function assertAttributeInternalType($expected, $attributeName, $classOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an attribute is smaller than another value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertAttributeLessThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an attribute is smaller than or equal to another value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertAttributeLessThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object does not contain a needle.
 *
 * @param mixed  $needle
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 * @param bool   $ignoreCase
 * @param bool   $checkForObjectIdentity
 * @param bool   $checkForNonObjectIdentity
 *
 * @since  Method available since Release 3.0.0
 */
function assertAttributeNotContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object does not contain only values of a given
 * type.
 *
 * @param string $type
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param bool   $isNativeType
 * @param string $message
 *
 * @since  Method available since Release 3.1.4
 */
function assertAttributeNotContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = null, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts the number of elements of an array, Countable or Traversable
 * that is stored in an attribute.
 *
 * @param int    $expectedCount
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 *
 * @since Method available since Release 3.6.0
 */
function assertAttributeNotCount($expectedCount, $haystackAttributeName, $haystackClassOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a static attribute of a class or an attribute of an object
 * is not empty.
 *
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 *
 * @since Method available since Release 3.5.0
 */
function assertAttributeNotEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable is not equal to an attribute of an object.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
 * @param float  $delta
 * @param int    $maxDepth
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 */
function assertAttributeNotEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 *
 * @since Method available since Release 3.5.0
 */
function assertAttributeNotInstanceOf($expected, $attributeName, $classOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
 *
 * @since Method available since Release 3.5.0
 */
function assertAttributeNotInternalType($expected, $attributeName, $classOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable and an attribute of an object do not have the
 * same type and value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param object $actualClassOrObject
 * @param string $message
 */
function assertAttributeNotSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable and an attribute of an object have the same type
 * and value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param object $actualClassOrObject
 * @param string $message
 */
function assertAttributeSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a class has a specified attribute.
 *
 * @param string $attributeName
 * @param string $className
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertClassHasAttribute($attributeName, $className, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a class has a specified static attribute.
 *
 * @param string $attributeName
 * @param string $className
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertClassHasStaticAttribute($attributeName, $className, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a class does not have a specified attribute.
 *
 * @param string $attributeName
 * @param string $className
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertClassNotHasAttribute($attributeName, $className, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a class does not have a specified static attribute.
 *
 * @param string $attributeName
 * @param string $className
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertClassNotHasStaticAttribute($attributeName, $className, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a haystack contains a needle.
 *
 * @param mixed  $needle
 * @param mixed  $haystack
 * @param string $message
 * @param bool   $ignoreCase
 * @param bool   $checkForObjectIdentity
 * @param bool   $checkForNonObjectIdentity
 *
 * @since  Method available since Release 2.1.0
 */
function assertContains($needle, $haystack, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a haystack contains only values of a given type.
 *
 * @param string $type
 * @param mixed  $haystack
 * @param bool   $isNativeType
 * @param string $message
 *
 * @since  Method available since Release 3.1.4
 */
function assertContainsOnly($type, $haystack, $isNativeType = null, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a haystack contains only instances of a given classname
 *
 * @param string            $classname
 * @param array|Traversable $haystack
 * @param string            $message
 */
function assertContainsOnlyInstancesOf($classname, $haystack, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts the number of elements of an array, Countable or Traversable.
 *
 * @param int    $expectedCount
 * @param mixed  $haystack
 * @param string $message
 */
function assertCount($expectedCount, $haystack, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable is empty.
 *
 * @param mixed  $actual
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertEmpty($actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a hierarchy of DOMElements matches.
 *
 * @param DOMElement $expectedElement
 * @param DOMElement $actualElement
 * @param bool       $checkAttributes
 * @param string     $message
 *
 * @since  Method available since Release 3.3.0
 */
function assertEqualXMLStructure(DOMElement $expectedElement, DOMElement $actualElement, $checkAttributes = false, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two variables are equal.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 * @param float  $delta
 * @param int    $maxDepth
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 */
function assertEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a condition is not true.
 *
 * @param bool   $condition
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertNotTrue($condition, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a condition is false.
 *
 * @param bool   $condition
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertFalse($condition, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that the contents of one file is equal to the contents of another
 * file.
 *
 * @param string $expected
 * @param string $actual
 * @param string $message
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 *
 * @since  Method available since Release 3.2.14
 */
function assertFileEquals($expected, $actual, $message = '', $canonicalize = false, $ignoreCase = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a file exists.
 *
 * @param string $filename
 * @param string $message
 *
 * @since  Method available since Release 3.0.0
 */
function assertFileExists($filename, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that the contents of one file is not equal to the contents of
 * another file.
 *
 * @param string $expected
 * @param string $actual
 * @param string $message
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 *
 * @since  Method available since Release 3.2.14
 */
function assertFileNotEquals($expected, $actual, $message = '', $canonicalize = false, $ignoreCase = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a file does not exist.
 *
 * @param string $filename
 * @param string $message
 *
 * @since  Method available since Release 3.0.0
 */
function assertFileNotExists($filename, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a value is greater than another value.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertGreaterThan($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a value is greater than or equal to another value.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertGreaterThanOrEqual($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable is of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 *
 * @since Method available since Release 3.5.0
 */
function assertInstanceOf($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable is of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 *
 * @since Method available since Release 3.5.0
 */
function assertInternalType($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a string is a valid JSON string.
 *
 * @param string $actualJson
 * @param string $message
 *
 * @since  Method available since Release 3.7.20
 */
function assertJson($actualJson, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two JSON files are equal.
 *
 * @param string $expectedFile
 * @param string $actualFile
 * @param string $message
 */
function assertJsonFileEqualsJsonFile($expectedFile, $actualFile, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two JSON files are not equal.
 *
 * @param string $expectedFile
 * @param string $actualFile
 * @param string $message
 */
function assertJsonFileNotEqualsJsonFile($expectedFile, $actualFile, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that the generated JSON encoded object and the content of the given file are equal.
 *
 * @param string $expectedFile
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringEqualsJsonFile($expectedFile, $actualJson, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two given JSON encoded objects or arrays are equal.
 *
 * @param string $expectedJson
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringEqualsJsonString($expectedJson, $actualJson, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that the generated JSON encoded object and the content of the given file are not equal.
 *
 * @param string $expectedFile
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringNotEqualsJsonFile($expectedFile, $actualJson, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two given JSON encoded objects or arrays are not equal.
 *
 * @param string $expectedJson
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a value is smaller than another value.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertLessThan($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a value is smaller than or equal to another value.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertLessThanOrEqual($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a haystack does not contain a needle.
 *
 * @param mixed  $needle
 * @param mixed  $haystack
 * @param string $message
 * @param bool   $ignoreCase
 * @param bool   $checkForObjectIdentity
 * @param bool   $checkForNonObjectIdentity
 *
 * @since  Method available since Release 2.1.0
 */
function assertNotContains($needle, $haystack, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a haystack does not contain only values of a given type.
 *
 * @param string $type
 * @param mixed  $haystack
 * @param bool   $isNativeType
 * @param string $message
 *
 * @since  Method available since Release 3.1.4
 */
function assertNotContainsOnly($type, $haystack, $isNativeType = null, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts the number of elements of an array, Countable or Traversable.
 *
 * @param int    $expectedCount
 * @param mixed  $haystack
 * @param string $message
 */
function assertNotCount($expectedCount, $haystack, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable is not empty.
 *
 * @param mixed  $actual
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertNotEmpty($actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two variables are not equal.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 * @param float  $delta
 * @param int    $maxDepth
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 *
 * @since  Method available since Release 2.3.0
 */
function assertNotEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable is not of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 *
 * @since Method available since Release 3.5.0
 */
function assertNotInstanceOf($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable is not of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
 *
 * @since Method available since Release 3.5.0
 */
function assertNotInternalType($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a condition is not false.
 *
 * @param bool   $condition
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertNotFalse($condition, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable is not null.
 *
 * @param mixed  $actual
 * @param string $message
 */
function assertNotNull($actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a string does not match a given regular expression.
 *
 * @param string $pattern
 * @param string $string
 * @param string $message
 *
 * @since  Method available since Release 2.1.0
 */
function assertNotRegExp($pattern, $string, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two variables do not have the same type and value.
 * Used on objects, it asserts that two variables do not reference
 * the same object.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 */
function assertNotSame($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
 * is not the same.
 *
 * @param array|Countable|Traversable $expected
 * @param array|Countable|Traversable $actual
 * @param string                      $message
 */
function assertNotSameSize($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * This assertion is the exact opposite of assertTag().
 *
 * Rather than asserting that $matcher results in a match, it asserts that
 * $matcher does not match.
 *
 * @param array  $matcher
 * @param string $actual
 * @param string $message
 * @param bool   $isHtml
 *
 * @since  Method available since Release 3.3.0
 */
function assertNotTag($matcher, $actual, $message = '', $isHtml = true)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a variable is null.
 *
 * @param mixed  $actual
 * @param string $message
 */
function assertNull($actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an object has a specified attribute.
 *
 * @param string $attributeName
 * @param object $object
 * @param string $message
 *
 * @since  Method available since Release 3.0.0
 */
function assertObjectHasAttribute($attributeName, $object, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that an object does not have a specified attribute.
 *
 * @param string $attributeName
 * @param object $object
 * @param string $message
 *
 * @since  Method available since Release 3.0.0
 */
function assertObjectNotHasAttribute($attributeName, $object, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a string matches a given regular expression.
 *
 * @param string $pattern
 * @param string $string
 * @param string $message
 */
function assertRegExp($pattern, $string, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two variables have the same type and value.
 * Used on objects, it asserts that two variables reference
 * the same object.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 */
function assertSame($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
 * is the same.
 *
 * @param array|Countable|Traversable $expected
 * @param array|Countable|Traversable $actual
 * @param string                      $message
 */
function assertSameSize($expected, $actual, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Assert the presence, absence, or count of elements in a document matching
 * the CSS $selector, regardless of the contents of those elements.
 *
 * The first argument, $selector, is the CSS selector used to match
 * the elements in the $actual document.
 *
 * The second argument, $count, can be either boolean or numeric.
 * When boolean, it asserts for presence of elements matching the selector
 * (true) or absence of elements (false).
 * When numeric, it asserts the count of elements.
 *
 * assertSelectCount("#binder", true, $xml);  // any?
 * assertSelectCount(".binder", 3, $xml); // exactly 3?
 *
 * @param array  $selector
 * @param int    $count
 * @param mixed  $actual
 * @param string $message
 * @param bool   $isHtml
 *
 * @since  Method available since Release 3.3.0
 */
function assertSelectCount($selector, $count, $actual, $message = '', $isHtml = true)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * assertSelectEquals("#binder .name", "Chuck", true,  $xml);  // any?
 * assertSelectEquals("#binder .name", "Chuck", false, $xml);  // none?
 *
 * @param array  $selector
 * @param string $content
 * @param int    $count
 * @param mixed  $actual
 * @param string $message
 * @param bool   $isHtml
 *
 * @since  Method available since Release 3.3.0
 */
function assertSelectEquals($selector, $content, $count, $actual, $message = '', $isHtml = true)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * assertSelectRegExp("#binder .name", "/Mike|Derek/", true, $xml); // any?
 * assertSelectRegExp("#binder .name", "/Mike|Derek/", 3, $xml);// 3?
 *
 * @param array  $selector
 * @param string $pattern
 * @param int    $count
 * @param mixed  $actual
 * @param string $message
 * @param bool   $isHtml
 *
 * @since  Method available since Release 3.3.0
 */
function assertSelectRegExp($selector, $pattern, $count, $actual, $message = '', $isHtml = true)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a string ends not with a given prefix.
 *
 * @param string $suffix
 * @param string $string
 * @param string $message
 *
 * @since  Method available since Release 3.4.0
 */
function assertStringEndsNotWith($suffix, $string, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a string ends with a given prefix.
 *
 * @param string $suffix
 * @param string $string
 * @param string $message
 *
 * @since  Method available since Release 3.4.0
 */
function assertStringEndsWith($suffix, $string, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that the contents of a string is equal
 * to the contents of a file.
 *
 * @param string $expectedFile
 * @param string $actualString
 * @param string $message
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 *
 * @since  Method available since Release 3.3.0
 */
function assertStringEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = false, $ignoreCase = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a string matches a given format string.
 *
 * @param string $format
 * @param string $string
 * @param string $message
 *
 * @since  Method available since Release 3.5.0
 */
function assertStringMatchesFormat($format, $string, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a string matches a given format file.
 *
 * @param string $formatFile
 * @param string $string
 * @param string $message
 *
 * @since  Method available since Release 3.5.0
 */
function assertStringMatchesFormatFile($formatFile, $string, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that the contents of a string is not equal
 * to the contents of a file.
 *
 * @param string $expectedFile
 * @param string $actualString
 * @param string $message
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 *
 * @since  Method available since Release 3.3.0
 */
function assertStringNotEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = false, $ignoreCase = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a string does not match a given format string.
 *
 * @param string $format
 * @param string $string
 * @param string $message
 *
 * @since  Method available since Release 3.5.0
 */
function assertStringNotMatchesFormat($format, $string, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a string does not match a given format string.
 *
 * @param string $formatFile
 * @param string $string
 * @param string $message
 *
 * @since  Method available since Release 3.5.0
 */
function assertStringNotMatchesFormatFile($formatFile, $string, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a string starts not with a given prefix.
 *
 * @param string $prefix
 * @param string $string
 * @param string $message
 *
 * @since  Method available since Release 3.4.0
 */
function assertStringStartsNotWith($prefix, $string, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a string starts with a given prefix.
 *
 * @param string $prefix
 * @param string $string
 * @param string $message
 *
 * @since  Method available since Release 3.4.0
 */
function assertStringStartsWith($prefix, $string, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Evaluate an HTML or XML string and assert its structure and/or contents.
 *
 * The first argument ($matcher) is an associative array that specifies the
 * match criteria for the assertion:
 *
 *  - `id`   : the node with the given id attribute must match the
 * corresponding value.
 *  - `tag`  : the node type must match the corresponding value.
 *  - `attributes`   : a hash. The node's attributes must match the
 * corresponding values in the hash.
 *  - `content`  : The text content must match the given value.
 *  - `parent`   : a hash. The node's parent must match the
 * corresponding hash.
 *  - `child`: a hash. At least one of the node's immediate children
 * must meet the criteria described by the hash.
 *  - `ancestor` : a hash. At least one of the node's ancestors must
 * meet the criteria described by the hash.
 *  - `descendant`   : a hash. At least one of the node's descendants must
 * meet the criteria described by the hash.
 *  - `children` : a hash, for counting children of a node.
 * Accepts the keys:
 *- `count`: a number which must equal the number of children
 *   that match
 *- `less_than`: the number of matching children must be greater
 *   than this number
 *- `greater_than` : the number of matching children must be less than
 *   this number
 *- `only` : another hash consisting of the keys to use to match
 *   on the children, and only matching children will be
 *   counted
 *
 * <code>
 * // Matcher that asserts that there is an element with an id="my_id".
 * $matcher = array('id' => 'my_id');
 *
 * // Matcher that asserts that there is a "span" tag.
 * $matcher = array('tag' => 'span');
 *
 * // Matcher that asserts that there is a "span" tag with the content
 * // "Hello World".
 * $matcher = array('tag' => 'span', 'content' => 'Hello World');
 *
 * // Matcher that asserts that there is a "span" tag with content matching
 * // the regular expression pattern.
 * $matcher = array('tag' => 'span', 'content' => 'regexp:/Try P(HP|ython)/');
 *
 * // Matcher that asserts that there is a "span" with an "list" class
 * // attribute.
 * $matcher = array(
 *   'tag'=> 'span',
 *   'attributes' => array('class' => 'list')
 * );
 *
 * // Matcher that asserts that there is a "span" inside of a "div".
 * $matcher = array(
 *   'tag'=> 'span',
 *   'parent' => array('tag' => 'div')
 * );
 *
 * // Matcher that asserts that there is a "span" somewhere inside a
 * // "table".
 * $matcher = array(
 *   'tag'  => 'span',
 *   'ancestor' => array('tag' => 'table')
 * );
 *
 * // Matcher that asserts that there is a "span" with at least one "em"
 * // child.
 * $matcher = array(
 *   'tag'   => 'span',
 *   'child' => array('tag' => 'em')
 * );
 *
 * // Matcher that asserts that there is a "span" containing a (possibly
 * // nested) "strong" tag.
 * $matcher = array(
 *   'tag'=> 'span',
 *   'descendant' => array('tag' => 'strong')
 * );
 *
 * // Matcher that asserts that there is a "span" containing 5-10 "em" tags
 * // as immediate children.
 * $matcher = array(
 *   'tag'  => 'span',
 *   'children' => array(
 * 'less_than'=> 11,
 * 'greater_than' => 4,
 * 'only' => array('tag' => 'em')
 *   )
 * );
 *
 * // Matcher that asserts that there is a "div", with an "ul" ancestor and
 * // a "li" parent (with class="enum"), and containing a "span" descendant
 * // that contains an element with id="my_test" and the text "Hello World".
 * $matcher = array(
 *   'tag'=> 'div',
 *   'ancestor'   => array('tag' => 'ul'),
 *   'parent' => array(
 * 'tag'=> 'li',
 * 'attributes' => array('class' => 'enum')
 *   ),
 *   'descendant' => array(
 * 'tag'   => 'span',
 * 'child' => array(
 *   'id'  => 'my_test',
 *   'content' => 'Hello World'
 * )
 *   )
 * );
 *
 * // Use assertTag() to apply a $matcher to a piece of $html.
 * $this->assertTag($matcher, $html);
 *
 * // Use assertTag() to apply a $matcher to a piece of $xml.
 * $this->assertTag($matcher, $xml, '', false);
 * </code>
 *
 * The second argument ($actual) is a string containing either HTML or
 * XML text to be tested.
 *
 * The third argument ($message) is an optional message that will be
 * used if the assertion fails.
 *
 * The fourth argument ($html) is an optional flag specifying whether
 * to load the $actual string into a DOMDocument using the HTML or
 * XML load strategy.  It is true by default, which assumes the HTML
 * load strategy.  In many cases, this will be acceptable for XML as well.
 *
 * @param array  $matcher
 * @param string $actual
 * @param string $message
 * @param bool   $isHtml
 *
 * @since  Method available since Release 3.3.0
 */
function assertTag($matcher, $actual, $message = '', $isHtml = true)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Evaluates a PHPUnit_Framework_Constraint matcher object.
 *
 * @param  mixed $value
 * @param PHPUnit_Framework_Constraint $constraint
 * @param string                       $message
 *
 * @since  Method available since Release 3.0.0
 */
function assertThat($value, PHPUnit_Framework_Constraint $constraint, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that a condition is true.
 *
 * @param bool   $condition
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertTrue($condition, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two XML files are equal.
 *
 * @param string $expectedFile
 * @param string $actualFile
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertXmlFileEqualsXmlFile($expectedFile, $actualFile, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two XML files are not equal.
 *
 * @param string $expectedFile
 * @param string $actualFile
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertXmlFileNotEqualsXmlFile($expectedFile, $actualFile, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two XML documents are equal.
 *
 * @param string $expectedFile
 * @param string $actualXml
 * @param string $message
 *
 * @since  Method available since Release 3.3.0
 */
function assertXmlStringEqualsXmlFile($expectedFile, $actualXml, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two XML documents are equal.
 *
 * @param string $expectedXml
 * @param string $actualXml
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertXmlStringEqualsXmlString($expectedXml, $actualXml, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two XML documents are not equal.
 *
 * @param string $expectedFile
 * @param string $actualXml
 * @param string $message
 *
 * @since  Method available since Release 3.3.0
 */
function assertXmlStringNotEqualsXmlFile($expectedFile, $actualXml, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Asserts that two XML documents are not equal.
 *
 * @param string $expectedXml
 * @param string $actualXml
 * @param string $message
 *
 * @since  Method available since Release 3.1.0
 */
function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, $message = '')
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a matcher that matches when the method is executed
 * at the given $index.
 *
 * @param int $index
 *
 * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtIndex
 *
 * @since  Method available since Release 3.0.0
 */
function at($index)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a matcher that matches when the method is executed at least once.
 *
 * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtLeastOnce
 *
 * @since  Method available since Release 3.0.0
 */
function atLeastOnce()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_Attribute matcher object.
 *
 * @param PHPUnit_Framework_Constraint $constraint
 * @param string                       $attributeName
 *
 * @return PHPUnit_Framework_Constraint_Attribute
 *
 * @since  Method available since Release 3.1.0
 */
function attribute(PHPUnit_Framework_Constraint $constraint, $attributeName)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsEqual matcher object
 * that is wrapped in a PHPUnit_Framework_Constraint_Attribute matcher
 * object.
 *
 * @param string $attributeName
 * @param mixed  $value
 * @param float  $delta
 * @param int    $maxDepth
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 *
 * @return PHPUnit_Framework_Constraint_Attribute
 *
 * @since  Method available since Release 3.1.0
 */
function attributeEqualTo($attributeName, $value, $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_Callback matcher object.
 *
 * @param callable $callback
 *
 * @return PHPUnit_Framework_Constraint_Callback
 */
function callback($callback)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_ClassHasAttribute matcher object.
 *
 * @param string $attributeName
 *
 * @return PHPUnit_Framework_Constraint_ClassHasAttribute
 *
 * @since  Method available since Release 3.1.0
 */
function classHasAttribute($attributeName)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_ClassHasStaticAttribute matcher
 * object.
 *
 * @param string $attributeName
 *
 * @return PHPUnit_Framework_Constraint_ClassHasStaticAttribute
 *
 * @since  Method available since Release 3.1.0
 */
function classHasStaticAttribute($attributeName)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_TraversableContains matcher
 * object.
 *
 * @param mixed $value
 * @param bool  $checkForObjectIdentity
 * @param bool  $checkForNonObjectIdentity
 *
 * @return PHPUnit_Framework_Constraint_TraversableContains
 *
 * @since  Method available since Release 3.0.0
 */
function contains($value, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_TraversableContainsOnly matcher
 * object.
 *
 * @param string $type
 *
 * @return PHPUnit_Framework_Constraint_TraversableContainsOnly
 *
 * @since  Method available since Release 3.1.4
 */
function containsOnly($type)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_TraversableContainsOnly matcher
 * object.
 *
 * @param string $classname
 *
 * @return PHPUnit_Framework_Constraint_TraversableContainsOnly
 */
function containsOnlyInstancesOf($classname)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsEqual matcher object.
 *
 * @param mixed $value
 * @param float $delta
 * @param int   $maxDepth
 * @param bool  $canonicalize
 * @param bool  $ignoreCase
 *
 * @return PHPUnit_Framework_Constraint_IsEqual
 *
 * @since  Method available since Release 3.0.0
 */
function equalTo($value, $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a matcher that matches when the method is executed
 * exactly $count times.
 *
 * @param int $count
 *
 * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
 *
 * @since  Method available since Release 3.0.0
 */
function exactly($count)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_FileExists matcher object.
 *
 * @return PHPUnit_Framework_Constraint_FileExists
 *
 * @since  Method available since Release 3.0.0
 */
function fileExists()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_GreaterThan matcher object.
 *
 * @param mixed $value
 *
 * @return PHPUnit_Framework_Constraint_GreaterThan
 *
 * @since  Method available since Release 3.0.0
 */
function greaterThan($value)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_Or matcher object that wraps
 * a PHPUnit_Framework_Constraint_IsEqual and a
 * PHPUnit_Framework_Constraint_GreaterThan matcher object.
 *
 * @param mixed $value
 *
 * @return PHPUnit_Framework_Constraint_Or
 *
 * @since  Method available since Release 3.1.0
 */
function greaterThanOrEqual($value)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsIdentical matcher object.
 *
 * @param mixed $value
 *
 * @return PHPUnit_Framework_Constraint_IsIdentical
 *
 * @since  Method available since Release 3.0.0
 */
function identicalTo($value)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsEmpty matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsEmpty
 *
 * @since  Method available since Release 3.5.0
 */
function isEmpty()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsFalse matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsFalse
 *
 * @since  Method available since Release 3.3.0
 */
function isFalse()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsInstanceOf matcher object.
 *
 * @param string $className
 *
 * @return PHPUnit_Framework_Constraint_IsInstanceOf
 *
 * @since  Method available since Release 3.0.0
 */
function isInstanceOf($className)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsJson matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsJson
 *
 * @since  Method available since Release 3.7.20
 */
function isJson()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsNull matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsNull
 *
 * @since  Method available since Release 3.3.0
 */
function isNull()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsTrue matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsTrue
 *
 * @since  Method available since Release 3.3.0
 */
function isTrue()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsType matcher object.
 *
 * @param string $type
 *
 * @return PHPUnit_Framework_Constraint_IsType
 *
 * @since  Method available since Release 3.0.0
 */
function isType($type)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_LessThan matcher object.
 *
 * @param mixed $value
 *
 * @return PHPUnit_Framework_Constraint_LessThan
 *
 * @since  Method available since Release 3.0.0
 */
function lessThan($value)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_Or matcher object that wraps
 * a PHPUnit_Framework_Constraint_IsEqual and a
 * PHPUnit_Framework_Constraint_LessThan matcher object.
 *
 * @param mixed $value
 *
 * @return PHPUnit_Framework_Constraint_Or
 *
 * @since  Method available since Release 3.1.0
 */
function lessThanOrEqual($value)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_And matcher object.
 *
 * @return PHPUnit_Framework_Constraint_And
 *
 * @since  Method available since Release 3.0.0
 */
function logicalAnd()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_Not matcher object.
 *
 * @param PHPUnit_Framework_Constraint $constraint
 *
 * @return PHPUnit_Framework_Constraint_Not
 *
 * @since  Method available since Release 3.0.0
 */
function logicalNot(PHPUnit_Framework_Constraint $constraint)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_Or matcher object.
 *
 * @return PHPUnit_Framework_Constraint_Or
 *
 * @since  Method available since Release 3.0.0
 */
function logicalOr()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_Xor matcher object.
 *
 * @return PHPUnit_Framework_Constraint_Xor
 *
 * @since  Method available since Release 3.0.0
 */
function logicalXor()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_StringMatches matcher object.
 *
 * @param string $string
 *
 * @return PHPUnit_Framework_Constraint_StringMatches
 *
 * @since  Method available since Release 3.5.0
 */
function matches($string)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_PCREMatch matcher object.
 *
 * @param string $pattern
 *
 * @return PHPUnit_Framework_Constraint_PCREMatch
 *
 * @since  Method available since Release 3.0.0
 */
function matchesRegularExpression($pattern)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a matcher that matches when the method is never executed.
 *
 * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
 *
 * @since  Method available since Release 3.0.0
 */
function never()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_ObjectHasAttribute matcher object.
 *
 * @param string $attributeName
 *
 * @return PHPUnit_Framework_Constraint_ObjectHasAttribute
 *
 * @since  Method available since Release 3.0.0
 */
function objectHasAttribute($attributeName)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * @param mixed $value, ...
 *
 * @return PHPUnit_Framework_MockObject_Stub_ConsecutiveCalls
 *
 * @since  Method available since Release 3.0.0
 */
function onConsecutiveCalls()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a matcher that matches when the method is executed exactly once.
 *
 * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
 *
 * @since  Method available since Release 3.0.0
 */
function once()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * @param int $argumentIndex
 *
 * @return PHPUnit_Framework_MockObject_Stub_ReturnArgument
 *
 * @since  Method available since Release 3.3.0
 */
function returnArgument($argumentIndex)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * @param mixed $callback
 *
 * @return PHPUnit_Framework_MockObject_Stub_ReturnCallback
 *
 * @since  Method available since Release 3.3.0
 */
function returnCallback($callback)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns the current object.
 *
 * This method is useful when mocking a fluent interface.
 *
 * @return PHPUnit_Framework_MockObject_Stub_ReturnSelf
 *
 * @since  Method available since Release 3.6.0
 */
function returnSelf()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * @param mixed $value
 *
 * @return PHPUnit_Framework_MockObject_Stub_Return
 *
 * @since  Method available since Release 3.0.0
 */
function returnValue($value)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * @param array $valueMap
 *
 * @return PHPUnit_Framework_MockObject_Stub_ReturnValueMap
 *
 * @since  Method available since Release 3.6.0
 */
function returnValueMap(array $valueMap)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_StringContains matcher object.
 *
 * @param string $string
 * @param bool   $case
 *
 * @return PHPUnit_Framework_Constraint_StringContains
 *
 * @since  Method available since Release 3.0.0
 */
function stringContains($string, $case = true)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_StringEndsWith matcher object.
 *
 * @param mixed $suffix
 *
 * @return PHPUnit_Framework_Constraint_StringEndsWith
 *
 * @since  Method available since Release 3.4.0
 */
function stringEndsWith($suffix)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns a PHPUnit_Framework_Constraint_StringStartsWith matcher object.
 *
 * @param mixed $prefix
 *
 * @return PHPUnit_Framework_Constraint_StringStartsWith
 *
 * @since  Method available since Release 3.4.0
 */
function stringStartsWith($prefix)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * @param Exception $exception
 *
 * @return PHPUnit_Framework_MockObject_Stub_Exception
 *
 * @since  Method available since Release 3.1.0
 */
function throwException(Exception $exception)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
