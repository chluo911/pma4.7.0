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
 * @since      Class available since Release 2.1.0
 */
class Util_TestDox_NamePrettifierTest extends PHPUnit_Framework_TestCase
{
    protected $namePrettifier;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_TestDox_NamePrettifier::prettifyTestClass
     */
    public function testTitleHasSensibleDefaults()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_TestDox_NamePrettifier::prettifyTestClass
     */
    public function testCaterForUserDefinedSuffix()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_TestDox_NamePrettifier::prettifyTestClass
     */
    public function testCaterForUserDefinedPrefix()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_TestDox_NamePrettifier::prettifyTestMethod
     */
    public function testTestNameIsConvertedToASentence()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_TestDox_NamePrettifier::prettifyTestMethod
     * @ticket 224
     */
    public function testTestNameIsNotGroupedWhenNotInSequence()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
