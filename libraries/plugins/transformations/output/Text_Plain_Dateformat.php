<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Text Plain Date Format Transformations plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage DateFormat
 */
namespace PMA\libraries\plugins\transformations\output;

use PMA\libraries\plugins\transformations\abs\DateFormatTransformationsPlugin;

/**
 * Handles the date format transformation for text plain
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage DateFormat
 */
class Text_Plain_Dateformat extends DateFormatTransformationsPlugin
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
