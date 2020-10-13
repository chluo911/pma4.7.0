<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Abstract class for the external transformations plugins
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage External
 */
namespace PMA\libraries\plugins\transformations\abs;

use PMA\libraries\plugins\TransformationsPlugin;

/**
 * Provides common methods for all of the external transformations plugins.
 *
 * @package PhpMyAdmin
 */
abstract class ExternalTransformationsPlugin extends TransformationsPlugin
{
    /**
     * Gets the transformation description of the specific plugin
     *
     * @return string
     */
    public static function getInfo()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enables no-wrapping
     *
     * @param array $options transformation options
     *
     * @return bool
     */
    public function applyTransformationNoWrap($options = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Does the actual work of each specific transformations plugin.
     *
     * @param string $buffer  text to be transformed
     * @param array  $options transformation options
     * @param string $meta    meta information
     *
     * @return string
     */
    public function applyTransformation($buffer, $options = array(), $meta = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }


    /* ~~~~~~~~~~~~~~~~~~~~ Getters and Setters ~~~~~~~~~~~~~~~~~~~~ */

    /**
     * Gets the transformation name of the specific plugin
     *
     * @return string
     */
    public static function getName()
    {
        return "External";
    }
}
