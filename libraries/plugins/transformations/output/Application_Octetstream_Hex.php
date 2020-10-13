<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Application OctetStream Hex Transformations plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Hex
 */
namespace PMA\libraries\plugins\transformations\output;

use PMA\libraries\plugins\transformations\abs\HexTransformationsPlugin;

/**
 * Handles the hex transformation for application octetstream
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Hex
 */
class Application_Octetstream_Hex extends HexTransformationsPlugin
{
    /**
     * Gets the plugin`s MIME type
     *
     * @return string
     */
    public static function getMIMEType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the plugin`s MIME subtype
     *
     * @return string
     */
    public static function getMIMESubtype()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
