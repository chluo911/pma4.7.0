<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Text Plain Substring Transformations plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Substring
 */
namespace PMA\libraries\plugins\transformations;

use PMA\libraries\plugins\transformations\abs\SubstringTransformationsPlugin;

/**
 * Handles the substring transformation for text plain
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Substring
 */
class Text_Plain_Substring extends SubstringTransformationsPlugin
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
