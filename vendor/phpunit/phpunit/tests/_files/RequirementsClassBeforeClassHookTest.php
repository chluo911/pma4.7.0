<?php

/**
 * @requires extension nonExistingExtension
 */
class RequirementsClassBeforeClassHookTest extends PHPUnit_Framework_TestCase
{
    public static function setUpBeforeClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
