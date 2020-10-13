<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Set of functions used to build XML dumps of tables
 *
 * @package    PhpMyAdmin-Export
 * @subpackage XML
 */
namespace PMA\libraries\plugins\export;

use PMA\libraries\properties\options\items\BoolPropertyItem;
use PMA\libraries\properties\plugins\ExportPluginProperties;
use PMA\libraries\properties\options\items\HiddenPropertyItem;
use PMA\libraries\properties\options\groups\OptionsPropertyMainGroup;
use PMA\libraries\properties\options\groups\OptionsPropertyRootGroup;
use PMA\libraries\DatabaseInterface;
use PMA\libraries\plugins\ExportPlugin;
use PMA\libraries\Util;

if (strlen($GLOBALS['db']) === 0) { /* Can't do server export */
    $GLOBALS['skip_import'] = true;
    return;
}

/**
 * Handles the export for the XML class
 *
 * @package    PhpMyAdmin-Export
 * @subpackage XML
 */
class ExportXml extends ExportPlugin
{
    /**
     * Table name
     *
     * @var string
     */
    private $_table;
    /**
     * Table names
     *
     * @var array
     */
    private $_tables;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setProperties();
    }

    /**
     * Initialize the local variables that are used for export PDF
     *
     * @return void
     */
    protected function initSpecificVariables()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the export XML properties
     *
     * @return void
     */
    protected function setProperties()
    {
        // create the export plugin property item
        $exportPluginProperties = new ExportPluginProperties();
        $exportPluginProperties->setText('XML');
        $exportPluginProperties->setExtension('xml');
        $exportPluginProperties->setMimeType('text/xml');
        $exportPluginProperties->setOptionsText(__('Options'));

        // create the root group that will be the options field for
        // $exportPluginProperties
        // this will be shown as "Format specific options"
        $exportSpecificOptions = new OptionsPropertyRootGroup(
            "Format Specific Options"
        );

        // general options main group
        $generalOptions = new OptionsPropertyMainGroup("general_opts");
        // create primary items and add them to the group
        $leaf = new HiddenPropertyItem("structure_or_data");
        $generalOptions->addProperty($leaf);
        // add the main group to the root group
        $exportSpecificOptions->addProperty($generalOptions);

        // export structure main group
        $structure = new OptionsPropertyMainGroup(
            "structure",
            __('Object creation options (all are recommended)')
        );

        // create primary items and add them to the group
        $leaf = new BoolPropertyItem(
            "export_events",
            __('Events')
        );
        $structure->addProperty($leaf);
        $leaf = new BoolPropertyItem(
            "export_functions",
            __('Functions')
        );
        $structure->addProperty($leaf);
        $leaf = new BoolPropertyItem(
            "export_procedures",
            __('Procedures')
        );
        $structure->addProperty($leaf);
        $leaf = new BoolPropertyItem(
            "export_tables",
            __('Tables')
        );
        $structure->addProperty($leaf);
        $leaf = new BoolPropertyItem(
            "export_triggers",
            __('Triggers')
        );
        $structure->addProperty($leaf);
        $leaf = new BoolPropertyItem(
            "export_views",
            __('Views')
        );
        $structure->addProperty($leaf);
        $exportSpecificOptions->addProperty($structure);

        // data main group
        $data = new OptionsPropertyMainGroup(
            "data",
            __('Data dump options')
        );
        // create primary items and add them to the group
        $leaf = new BoolPropertyItem(
            "export_contents",
            __('Export contents')
        );
        $data->addProperty($leaf);
        $exportSpecificOptions->addProperty($data);

        // set the options for the export plugin property item
        $exportPluginProperties->setOptions($exportSpecificOptions);
        $this->properties = $exportPluginProperties;
    }

    /**
     * Generates output for SQL defintions of routines
     *
     * @param string $db      Database name
     * @param string $type    Item type to be used in XML output
     * @param string $dbitype Item type used in DBI qieries
     *
     * @return string XML with definitions
     */
    private function _exportRoutines($db, $type, $dbitype)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates output for SQL defintions
     *
     * @param string $db      Database name
     * @param string $type    Item type to be used in XML output
     * @param string $dbitype Item type used in DBI qieries
     * @param array  $names   Names of items to export
     *
     * @return string XML with definitions
     */
    private function _exportDefinitions($db, $type, $dbitype, $names)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs export header. It is the first method to be called, so all
     * the required variables are initialized here.
     *
     * @return bool Whether it succeeded
     */
    public function exportHeader()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs export footer
     *
     * @return bool Whether it succeeded
     */
    public function exportFooter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs database header
     *
     * @param string $db       Database name
     * @param string $db_alias Aliases of db
     *
     * @return bool Whether it succeeded
     */
    public function exportDBHeader($db, $db_alias = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs database footer
     *
     * @param string $db Database name
     *
     * @return bool Whether it succeeded
     */
    public function exportDBFooter($db)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs CREATE DATABASE statement
     *
     * @param string $db          Database name
     * @param string $export_type 'server', 'database', 'table'
     * @param string $db_alias    Aliases of db
     *
     * @return bool Whether it succeeded
     */
    public function exportDBCreate($db, $export_type, $db_alias = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs the content of a table in XML format
     *
     * @param string $db        database name
     * @param string $table     table name
     * @param string $crlf      the end of line sequence
     * @param string $error_url the url to go back in case of error
     * @param string $sql_query SQL query for obtaining data
     * @param array  $aliases   Aliases of db/table/columns
     *
     * @return bool Whether it succeeded
     */
    public function exportData(
        $db,
        $table,
        $crlf,
        $error_url,
        $sql_query,
        $aliases = array()
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }


    /* ~~~~~~~~~~~~~~~~~~~~ Getters and Setters ~~~~~~~~~~~~~~~~~~~~ */

    /**
     * Gets the table name
     *
     * @return string
     */
    private function _getTable()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the table name
     *
     * @param string $table table name
     *
     * @return void
     */
    private function _setTable($table)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the table names
     *
     * @return array
     */
    private function _getTables()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the table names
     *
     * @param array $tables table names
     *
     * @return void
     */
    private function _setTables($tables)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
