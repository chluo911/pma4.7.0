<?php
/*
 * This file is part of the Environment package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Environment;

use PHPUnit_Framework_TestCase;

class ConsoleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \SebastianBergmann\Environment\Console
     */
    private $console;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers \SebastianBergmann\Environment\Console::isInteractive
     */
    public function testCanDetectIfStdoutIsInteractiveByDefault()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers \SebastianBergmann\Environment\Console::isInteractive
     */
    public function testCanDetectIfFileDescriptorIsInteractive()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers \SebastianBergmann\Environment\Console::hasColorSupport
     * @uses   \SebastianBergmann\Environment\Console::isInteractive
     */
    public function testCanDetectColorSupport()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers \SebastianBergmann\Environment\Console::getNumberOfColumns
     * @uses   \SebastianBergmann\Environment\Console::isInteractive
     */
    public function testCanDetectNumberOfColumns()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
