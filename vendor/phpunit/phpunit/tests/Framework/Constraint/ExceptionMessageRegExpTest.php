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
 * @since      Class available since Release 4.3.0
 * @covers     PHPUnit_Framework_Constraint_ExceptionMessageRegExp
 */
class ExceptionMessageRegExpTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /^A polymorphic \w+ message/
     */
    public function testRegexMessage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /^a poly[a-z]+ [a-zA-Z0-9_]+ me(s){2}age$/i
     */
    public function testRegexMessageExtreme()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @runInSeparateProcess
     * @requires extension xdebug
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp #Screaming preg_match#
     */
    public function testMessageXdebugScreamCompatibility()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @coversNothing
     * @expectedException \Exception variadic
     * @expectedExceptionMessageRegExp /^A variadic \w+ message/
     */
    public function testSimultaneousLiteralAndRegExpExceptionMessage()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
