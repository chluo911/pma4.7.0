<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Schema export handler
 *
 * @package PhpMyAdmin
 */
use PMA\libraries\plugins\SchemaPlugin;

/**
 * Gets some core libraries
 */
require_once 'libraries/common.inc.php';

/**
 * get all variables needed for exporting relational schema
 * in $cfgRelation
 */
$cfgRelation = PMA_getRelationsParam();

require_once 'libraries/pmd_common.php';
require_once 'libraries/plugin_interface.lib.php';

if (! isset($_REQUEST['export_type'])) {
    PMA\libraries\Util::checkParameters(array('export_type'));
}

/**
 * Include the appropriate Schema Class depending on $export_type
 * default is PDF
 */
PMA_processExportSchema($_REQUEST['export_type']);

/**
 * get all the export options and verify
 * call and include the appropriate Schema Class depending on $export_type
 *
 * @param string $export_type format of the export
 *
 * @return void
 */
function PMA_processExportSchema($export_type)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
