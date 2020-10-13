<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Properties class for the import plug-in
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\properties\plugins;

/**
 * Defines possible options and getters and setters for them.
 *
 * @package PhpMyAdmin
 */
class ImportPluginProperties extends PluginPropertyItem
{
    /**
     * Returns the property item type of either an instance of
     *  - PMA\libraries\properties\options\OptionsPropertyOneItem ( f.e. "bool",
     *  "text", "radio", etc ) or
     *  - PMA\libraries\properties\options\OptionsPropertyGroup   ( "root", "main"
     *  or "subgroup" )
     *  - PMA\libraries\properties\plugins\PluginPropertyItem     ( "export", "import", "transformations" )
     *
     * @return string
     */
    public function getItemType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
