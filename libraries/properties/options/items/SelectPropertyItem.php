<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Holds the PMA\libraries\properties\options\items\SelectPropertyItem class
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\properties\options\items;

use PMA\libraries\properties\options\OptionsPropertyOneItem;

/**
 * Single property item class of type select
 *
 * @package PhpMyAdmin
 */
class SelectPropertyItem extends OptionsPropertyOneItem
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
