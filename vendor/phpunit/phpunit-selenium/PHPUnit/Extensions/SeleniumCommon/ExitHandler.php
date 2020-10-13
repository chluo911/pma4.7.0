<?php
/**
 * If Ececution was stopped by calling exit();
 * php does not append append.php, so no code coverage date is collected
 * We have to add shutdown handler to append this file manualy.
 * @author Arbuzov <info@whitediver.com>
 *
 */
class PHPUnit_Extensions_SeleniumCommon_ExitHandler
{
    /**
     * Register handler.
     * If project have own shutdown hanldler user have to add function to handler
     *
     */
    public static function init()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Manual include apendable files
     */
    public static function handle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
