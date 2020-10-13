<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * XML (and HTML) editing with syntax highlighted CodeMirror editor
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage XML
 */
namespace PMA\libraries\plugins\transformations\input;

use PMA\libraries\plugins\transformations\abs\CodeMirrorEditorTransformationPlugin;

/**
 * XML (and HTML) editing with syntax highlighted CodeMirror editor
 *
 * @package    PhpMyAdmin-Transformations
 * @subpackage XML
 */
class Text_Plain_XmlEditor extends CodeMirrorEditorTransformationPlugin
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
     * Returns the array of scripts (filename) required for plugin
     * initialization and handling
     *
     * @return array javascripts to be included
     */
    public function getScripts()
    {
        $scripts = array();
        if ($GLOBALS['cfg']['CodemirrorEnable']) {
            $scripts[] = 'codemirror/lib/codemirror.js';
            $scripts[] = 'codemirror/mode/xml/xml.js';
            $scripts[] = 'transformations/xml_editor.js';
        }

        return $scripts;
    }

    /* ~~~~~~~~~~~~~~~~~~~~ Getters and Setters ~~~~~~~~~~~~~~~~~~~~ */

    /**
     * Gets the transformation name of the specific plugin
     *
     * @return string
     */
    public static function getName()
    {
        return "XML";
    }

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
