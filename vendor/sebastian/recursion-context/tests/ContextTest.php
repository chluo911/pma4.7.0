<?php
/*
 * This file is part of the Recursion Context package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\RecursionContext;

use PHPUnit_Framework_TestCase;

/**
 * @covers SebastianBergmann\RecursionContext\Context
 */
class ContextTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \SebastianBergmann\RecursionContext\Context
     */
    private $context;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function failsProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function valuesProvider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers       SebastianBergmann\RecursionContext\Context::add
     * @uses         SebastianBergmann\RecursionContext\InvalidArgumentException
     * @dataProvider failsProvider
     */
    public function testAddFails($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers       SebastianBergmann\RecursionContext\Context::contains
     * @uses         SebastianBergmann\RecursionContext\InvalidArgumentException
     * @dataProvider failsProvider
     */
    public function testContainsFails($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers       SebastianBergmann\RecursionContext\Context::add
     * @dataProvider valuesProvider
     */
    public function testAdd($value, $key)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers       SebastianBergmann\RecursionContext\Context::contains
     * @uses         SebastianBergmann\RecursionContext\Context::add
     * @depends      testAdd
     * @dataProvider valuesProvider
     */
    public function testContainsFound($value, $key)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers       SebastianBergmann\RecursionContext\Context::contains
     * @dataProvider valuesProvider
     */
    public function testContainsNotFound($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
