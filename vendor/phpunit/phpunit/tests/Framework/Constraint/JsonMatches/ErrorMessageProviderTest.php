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
 * @since      File available since Release 3.7.0
 */
class Framework_Constraint_JsonMatches_ErrorMessageProviderTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider translateTypeToPrefixDataprovider
     * @covers PHPUnit_Framework_Constraint_JsonMatches_ErrorMessageProvider::translateTypeToPrefix
     */
    public function testTranslateTypeToPrefix($expected, $type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider determineJsonErrorDataprovider
     * @covers PHPUnit_Framework_Constraint_JsonMatches_ErrorMessageProvider::determineJsonError
     */
    public function testDetermineJsonError($expected, $error, $prefix)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function determineJsonErrorDataprovider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public static function translateTypeToPrefixDataprovider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
