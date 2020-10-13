<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * PDF schema export code
 *
 * @package    PhpMyAdmin-Schema
 * @subpackage EPS
 */
namespace PMA\libraries\plugins\schema;

use PMA\libraries\properties\options\items\BoolPropertyItem;
use PMA\libraries\properties\options\groups\OptionsPropertyMainGroup;
use PMA\libraries\properties\options\groups\OptionsPropertyRootGroup;
use PMA\libraries\plugins\schema\eps\EpsRelationSchema;
use PMA\libraries\plugins\SchemaPlugin;
use PMA\libraries\properties\plugins\SchemaPluginProperties;
use PMA\libraries\properties\options\items\SelectPropertyItem;

/**
 * Handles the schema export for the EPS format
 *
 * @package    PhpMyAdmin-Schema
 * @subpackage EPS
 */
class SchemaEps extends SchemaPlugin
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
     * Sets the schema export EPS properties
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
     * Exports the schema into EPS format.
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
