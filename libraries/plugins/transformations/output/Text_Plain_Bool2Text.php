<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Text Plain Bool2Text Transformations plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Bool2Text
 */
namespace PMA\libraries\plugins\transformations\output;

use PMA\libraries\plugins\transformations\abs\Bool2TextTransformationsPlugin;

/**
 * Handles the Boolean to Text transformation for text plain.
 * Has one option: the output format (default 'T/F')
 * or 'Y/N'
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Bool2Text
 */
class Text_Plain_Bool2Text extends Bool2TextTransformationsPlugin
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
