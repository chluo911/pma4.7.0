<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * PDF schema export code
 *
 * @package    PhpMyAdmin-Schema
 * @subpackage SVG
 */
namespace PMA\libraries\plugins\schema;

use PMA\libraries\properties\options\items\BoolPropertyItem;
use PMA\libraries\properties\options\groups\OptionsPropertyMainGroup;
use PMA\libraries\properties\options\groups\OptionsPropertyRootGroup;
use PMA\libraries\plugins\SchemaPlugin;
use PMA\libraries\plugins\schema\svg\SvgRelationSchema;
use PMA\libraries\properties\plugins\SchemaPluginProperties;

/**
 * Handles the schema export for the SVG format
 *
 * @package    PhpMyAdmin-Schema
 * @subpackage SVG
 */
class SchemaSvg extends SchemaPlugin
{
    /**
     * Constructor
     */
    public function __construct()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the schema export SVG properties
     *
     * @return void
     */
    protected function setProperties()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Exports the schema into SVG format.
     *
     * @param string $db database name
     *
     * @return bool Whether it succeeded
     */
    public function exportSchema($db)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
