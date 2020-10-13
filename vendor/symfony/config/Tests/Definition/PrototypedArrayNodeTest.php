<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Tests\Definition;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\Definition\PrototypedArrayNode;
use Symfony\Component\Config\Definition\ArrayNode;
use Symfony\Component\Config\Definition\ScalarNode;
use Symfony\Component\Config\Definition\VariableNode;

class PrototypedArrayNodeTest extends TestCase
{
    public function testGetDefaultValueReturnsAnEmptyArrayForPrototypes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testGetDefaultValueReturnsDefaultValueForPrototypes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    // a remapped key (e.g. "mapping" -> "mappings") should be unset after being used
    public function testRemappedKeysAreUnset()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests that when a key attribute is mapped, that key is removed from the array.
     *
     *     <things>
     *         <option id="option1" value="foo">
     *         <option id="option2" value="bar">
     *     </things>
     *
     * The above should finally be mapped to an array that looks like this
     * (because "id" is the key attribute).
     *
     *     array(
     *         'things' => array(
     *             'option1' => 'foo',
     *             'option2' => 'bar',
     *         )
     *     )
     */
    public function testMappedAttributeKeyIsRemoved()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests the opposite of the testMappedAttributeKeyIsRemoved because
     * the removal can be toggled with an option.
     */
    public function testMappedAttributeKeyNotRemoved()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAddDefaultChildren()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testDefaultChildrenWinsOverDefaultValue()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected function getPrototypeNodeWithDefaultChildren()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tests that when a key attribute is mapped, that key is removed from the array.
     * And if only 'value' element is left in the array, it will replace its wrapper array.
     *
     *     <things>
     *         <option id="option1" value="value1">
     *     </things>
     *
     * The above should finally be mapped to an array that looks like this
     * (because "id" is the key attribute).
     *
     *     array(
     *         'things' => array(
     *             'option1' => 'value1'
     *         )
     *     )
     *
     * It's also possible to mix 'value-only' and 'non-value-only' elements in the array.
     *
     * <things>
     *     <option id="option1" value="value1">
     *     <option id="option2" value="value2" foo="foo2">
     * </things>
     *
     * The above should finally be mapped to an array as follows
     *
     * array(
     *     'things' => array(
     *         'option1' => 'value1',
     *         'option2' => array(
     *             'value' => 'value2',
     *             'foo' => 'foo2'
     *         )
     *     )
     * )
     *
     * The 'value' element can also be ArrayNode:
     *
     * <things>
     *     <option id="option1">
     *         <value>
     *            <foo>foo1</foo>
     *            <bar>bar1</bar>
     *         </value>
     *     </option>
     * </things>
     *
     * The above should be finally be mapped to an array as follows
     *
     * array(
     *     'things' => array(
     *         'option1' => array(
     *             'foo' => 'foo1',
     *             'bar' => 'bar1'
     *         )
     *     )
     * )
     *
     * If using VariableNode for value node, it's also possible to mix different types of value nodes:
     *
     * <things>
     *     <option id="option1">
     *         <value>
     *            <foo>foo1</foo>
     *            <bar>bar1</bar>
     *         </value>
     *     </option>
     *     <option id="option2" value="value2">
     * </things>
     *
     * The above should be finally mapped to an array as follows
     *
     * array(
     *     'things' => array(
     *         'option1' => array(
     *             'foo' => 'foo1',
     *             'bar' => 'bar1'
     *         ),
     *         'option2' => 'value2'
     *     )
     * )
     *
     *
     * @dataProvider getDataForKeyRemovedLeftValueOnly
     */
    public function testMappedAttributeKeyIsRemovedLeftValueOnly($value, $children, $expected)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getDataForKeyRemovedLeftValueOnly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
