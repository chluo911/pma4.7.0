<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Image PNG Inline Transformations plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Inline
 */
namespace PMA\libraries\plugins\transformations\output;

use PMA\libraries\plugins\transformations\abs\InlineTransformationsPlugin;

/**
 * Handles the inline transformation for image png
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage Inline
 */
class Image_PNG_Inline extends InlineTransformationsPlugin
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
