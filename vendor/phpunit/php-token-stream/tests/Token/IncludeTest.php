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
 * Tests for the PHP_Token_REQUIRE_ONCE, PHP_Token_REQUIRE
 * PHP_Token_INCLUDE_ONCE and PHP_Token_INCLUDE_ONCE classes.
 *
 * @package    PHP_TokenStream
 * @subpackage Tests
 * @author     Laurent Laville <pear@laurent-laville.org>
 * @copyright  Sebastian Bergmann <sebastian@phpunit.de>
 * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
 * @version    Release: @package_version@
 * @link       http://github.com/sebastianbergmann/php-token-stream/
 * @since      Class available since Release 1.0.2
 */
class PHP_Token_IncludeTest extends PHPUnit_Framework_TestCase
{
    protected $ts;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_Token_Includes::getName
     * @covers PHP_Token_Includes::getType
     */
    public function testGetIncludes()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_Token_Includes::getName
     * @covers PHP_Token_Includes::getType
     */
    public function testGetIncludesCategorized()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHP_Token_Includes::getName
     * @covers PHP_Token_Includes::getType
     */
    public function testGetIncludesCategory()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
