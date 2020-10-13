<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Set of functions used to build MediaWiki dumps of tables
 *
 * @package    PhpMyAdmin-Export
 * @subpackage MediaWiki
 */
namespace PMA\libraries\plugins\export;

use PMA\libraries\properties\options\items\BoolPropertyItem;
use PMA\libraries\plugins\ExportPlugin;
use PMA\libraries\properties\plugins\ExportPluginProperties;
use PMA\libraries\properties\options\groups\OptionsPropertyMainGroup;
use PMA\libraries\properties\options\groups\OptionsPropertyRootGroup;
use PMA\libraries\properties\options\groups\OptionsPropertySubgroup;
use PMA;
use PMA\libraries\properties\options\items\RadioPropertyItem;

/**
 * Handles the export for the MediaWiki class
 *
 * @package    PhpMyAdmin-Export
 * @subpackage MediaWiki
 */
class ExportMediawiki extends ExportPlugin
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setProperties();
    }

    /**
     * Sets the export MediaWiki properties
     *
     * @return void
     */
    protected function setProperties()
    {
        $exportPluginProperties = new ExportPluginProperties();
        $exportPluginProperties->setText('MediaWiki Table');
        $exportPluginProperties->setExtension('mediawiki');
        $exportPluginProperties->setMimeType('text/plain');
        $exportPluginProperties->setOptionsText(__('Options'));

        // create the root group that will be the options field for
        // $exportPluginProperties
        // this will be shown as "Format specific options"
        $exportSpecificOptions = new OptionsPropertyRootGroup(
            "Format Specific Options"
        );

        // general options main group
        $generalOptions = new OptionsPropertyMainGroup(
            "general_opts",
            __('Dump table')
        );

        // what to dump (structure/data/both)
        $subgroup = new OptionsPropertySubgroup(
            "dump_table",
            __("Dump table")
        );
        $leaf = new RadioPropertyItem('structure_or_data');
        $leaf->setValues(
            array(
                'structure'          => __('structure'),
                'data'               => __('data'),
                'structure_and_data' => __('structure and data'),
            )
        );
        $subgroup->setSubgroupHeader($leaf);
        $generalOptions->addProperty($subgroup);

        // export table name
        $leaf = new BoolPropertyItem(
            "caption",
            __('Export table names')
        );
        $generalOptions->addProperty($leaf);

        // export table headers
        $leaf = new BoolPropertyItem(
            "headers",
            __('Export table headers')
        );
        $generalOptions->addProperty($leaf);
        //add the main group to the root group
        $exportSpecificOptions->addProperty($generalOptions);

        // set the options for the export plugin property item
        $exportPluginProperties->setOptions($exportSpecificOptions);
        $this->properties = $exportPluginProperties;
    }

    /**
     * Outputs export header
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
     * @param string $db_alias Alias of db
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
     * Outputs table's structure
     *
     * @param string $db          database name
     * @param string $table       table name
     * @param string $crlf        the end of line sequence
     * @param string $error_url   the url to go back in case of error
     * @param string $export_mode 'create_table','triggers','create_view',
     *                            'stand_in'
     * @param string $export_type 'server', 'database', 'table'
     * @param bool   $do_relation whether to include relation comments
     * @param bool   $do_comments whether to include the pmadb-style column
     *                            comments as comments in the structure; this is
     *                            deprecated but the parameter is left here
     *                            because export.php calls exportStructure()
     *                            also for other export types which use this
     *                            parameter
     * @param bool   $do_mime     whether to include mime comments
     * @param bool   $dates       whether to include creation/update/check dates
     * @param array  $aliases     Aliases of db/table/columns
     *
     * @return bool               Whether it succeeded
     */
    public function exportStructure(
        $db,
        $table,
        $crlf,
        $error_url,
        $export_mode,
        $export_type,
        $do_relation = false,
        $do_comments = false,
        $do_mime = false,
        $dates = false,
        $aliases = array()
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs the content of a table in MediaWiki format
     *
     * @param string $db        database name
     * @param string $table     table name
     * @param string $crlf      the end of line sequence
     * @param string $error_url the url to go back in case of error
     * @param string $sql_query SQL query for obtaining data
     * @param array  $aliases   Aliases of db/table/columns
     *
     * @return bool             Whether it succeeded
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

    /**
     * Outputs comments containing info about the exported tables
     *
     * @param string $text Text of comment
     *
     * @return string The formatted comment
     */
    private function _exportComment($text = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs CRLF
     *
     * @return string CRLF
     */
    private function _exportCRLF()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
