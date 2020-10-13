<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Text Plain Prepend/Append Transformations plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage PreApPend
 */
namespace PMA\libraries\plugins\transformations;

use PMA\libraries\plugins\transformations\abs\PreApPendTransformationsPlugin;

/**
 * Handles the prepend and/or append transformation for text plain.
 * Has two options: the text to be prepended and appended (if any, default '')
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage PreApPend
 */
class Text_Plain_PreApPend extends PreApPendTransformationsPlugin
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
