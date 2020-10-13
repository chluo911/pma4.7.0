<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Text Plain Regex Validation Input Transformations plugin for phpMyAdmin
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage RegexValidation
 */
namespace PMA\libraries\plugins\transformations\input;

use PMA\libraries\plugins\transformations\abs\RegexValidationTransformationsPlugin;

/**
 * Handles the input regex validation transformation for text plain.
 * Has one option: the regular expression
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage RegexValidation
 */
class Text_Plain_RegexValidation extends RegexValidationTransformationsPlugin
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
