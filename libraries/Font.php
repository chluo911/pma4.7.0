<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Class with Font related methods.
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries;

/**
 * Class with Font related methods.
 *
 * @package PhpMyAdmin
 */
class Font
{
    /**
     * Get list with characters and the corresponding width modifiers.
     *
     * @return array with characters and corresponding width modifier
     * @access public
     */
    public static function getCharLists()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get width of string/text
     *
     * The text element width is calculated depending on font name
     * and font size.
     *
     * @param string  $text      string of which the width will be calculated
     * @param string  $font      name of the font like Arial,sans-serif etc
     * @param integer $fontSize  size of font
     * @param array   $charLists list of characters and their width modifiers
     *
     * @return integer width of the text
     * @access public
     */
    public static function getStringWidth($text, $font, $fontSize, $charLists = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
