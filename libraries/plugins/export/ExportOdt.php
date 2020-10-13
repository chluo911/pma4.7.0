<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Set of functions used to build OpenDocument Text dumps of tables
 *
 * @package    PhpMyAdmin-Export
 * @subpackage ODT
 */
namespace PMA\libraries\plugins\export;

use PMA\libraries\properties\options\items\BoolPropertyItem;
use PMA\libraries\properties\plugins\ExportPluginProperties;
use PMA\libraries\properties\options\groups\OptionsPropertyMainGroup;
use PMA\libraries\properties\options\groups\OptionsPropertyRootGroup;
use PMA\libraries\DatabaseInterface;
use PMA\libraries\plugins\ExportPlugin;
use PMA\libraries\Util;
use PMA\libraries\properties\options\items\RadioPropertyItem;
use PMA\libraries\properties\options\items\TextPropertyItem;
use PMA\libraries\OpenDocument;

$GLOBALS['odt_buffer'] = '';

/**
 * Handles the export for the ODT class
 *
 * @package    PhpMyAdmin-Export
 * @subpackage ODT
 */
class ExportOdt extends ExportPlugin
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->setProperties();
    }

    /**
     * Sets the export ODT properties
     *
     * @return void
     */
    protected function setProperties()
    {
        global $plugin_param;
        $hide_structure = false;
        if ($plugin_param['export_type'] == 'table'
            && !$plugin_param['single_table']
        ) {
            $hide_structure = true;
        }

        $exportPluginProperties = new ExportPluginProperties();
        $exportPluginProperties->setText('OpenDocument Text');
        $exportPluginProperties->setExtension('odt');
        $exportPluginProperties->setMimeType(
            'application/vnd.oasis.opendocument.text'
        );
        $exportPluginProperties->setForceFile(true);
        $exportPluginProperties->setOptionsText(__('Options'));

        // create the root group that will be the options field for
        // $exportPluginProperties
        // this will be shown as "Format specific options"
        $exportSpecificOptions = new OptionsPropertyRootGroup(
            "Format Specific Options"
        );

        // what to dump (structure/data/both) main group
        $dumpWhat = new OptionsPropertyMainGroup(
            "general_opts",
            __('Dump table')
        );
        // create primary items and add them to the group
        $leaf = new RadioPropertyItem("structure_or_data");
        $leaf->setValues(
            array(
                'structure'          => __('structure'),
                'data'               => __('data'),
                'structure_and_data' => __('structure and data'),
            )
        );
        $dumpWhat->addProperty($leaf);
        // add the main group to the root group
        $exportSpecificOptions->addProperty($dumpWhat);

        // structure options main group
        if (!$hide_structure) {
            $structureOptions = new OptionsPropertyMainGroup(
                "structure",
                __('Object creation options')
            );
            $structureOptions->setForce('data');
            // create primary items and add them to the group
            if (!empty($GLOBALS['cfgRelation']['relation'])) {
                $leaf = new BoolPropertyItem(
                    "relation",
                    __('Display foreign key relationships')
                );
                $structureOptions->addProperty($leaf);
            }
            $leaf = new BoolPropertyItem(
                "comments",
                __('Display comments')
            );
            $structureOptions->addProperty($leaf);
            if (!empty($GLOBALS['cfgRelation']['mimework'])) {
                $leaf = new BoolPropertyItem(
                    "mime",
                    __('Display MIME types')
                );
                $structureOptions->addProperty($leaf);
            }
            // add the main group to the root group
            $exportSpecificOptions->addProperty($structureOptions);
        }

        // data options main group
        $dataOptions = new OptionsPropertyMainGroup(
            "data",
            __('Data dump options')
        );
        $dataOptions->setForce('structure');
        // create primary items and add them to the group
        $leaf = new BoolPropertyItem(
            "columns",
            __('Put columns names in the first row')
        );
        $dataOptions->addProperty($leaf);
        $leaf = new TextPropertyItem(
            'null',
            __('Replace NULL with:')
        );
        $dataOptions->addProperty($leaf);
        // add the main group to the root group
        $exportSpecificOptions->addProperty($dataOptions);

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
     * Outputs the content of a table in NHibernate format
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

    /**
     * Returns a stand-in CREATE definition to resolve view dependencies
     *
     * @param string $db      the database name
     * @param string $view    the view name
     * @param string $crlf    the end of line sequence
     * @param array  $aliases Aliases of db/table/columns
     *
     * @return string resulting definition
     */
    public function getTableDefStandIn($db, $view, $crlf, $aliases = array())
    {
        $db_alias = $db;
        $view_alias = $view;
        $this->initAlias($aliases, $db_alias, $view_alias);
        /**
         * Gets fields properties
         */
        $GLOBALS['dbi']->selectDb($db);

        /**
         * Displays the table structure
         */
        $GLOBALS['odt_buffer']
            .= '<table:table table:name="'
            . htmlspecialchars($view_alias) . '_data">';
        $columns_cnt = 4;
        $GLOBALS['odt_buffer']
            .= '<table:table-column'
            . ' table:number-columns-repeated="' . $columns_cnt . '"/>';
        /* Header */
        $GLOBALS['odt_buffer'] .= '<table:table-row>'
            . '<table:table-cell office:value-type="string">'
            . '<text:p>' . __('Column') . '</text:p>'
            . '</table:table-cell>'
            . '<table:table-cell office:value-type="string">'
            . '<text:p>' . __('Type') . '</text:p>'
            . '</table:table-cell>'
            . '<table:table-cell office:value-type="string">'
            . '<text:p>' . __('Null') . '</text:p>'
            . '</table:table-cell>'
            . '<table:table-cell office:value-type="string">'
            . '<text:p>' . __('Default') . '</text:p>'
            . '</table:table-cell>'
            . '</table:table-row>';

        $columns = $GLOBALS['dbi']->getColumns($db, $view);
        foreach ($columns as $column) {
            $col_as = $column['Field'];
            if (!empty($aliases[$db]['tables'][$view]['columns'][$col_as])) {
                $col_as = $aliases[$db]['tables'][$view]['columns'][$col_as];
            }
            $GLOBALS['odt_buffer'] .= $this->formatOneColumnDefinition(
                $column,
                $col_as
            );
            $GLOBALS['odt_buffer'] .= '</table:table-row>';
        } // end foreach

        $GLOBALS['odt_buffer'] .= '</table:table>';

        return true;
    }

    /**
     * Returns $table's CREATE definition
     *
     * @param string $db            the database name
     * @param string $table         the table name
     * @param string $crlf          the end of line sequence
     * @param string $error_url     the url to go back in case of error
     * @param bool   $do_relation   whether to include relation comments
     * @param bool   $do_comments   whether to include the pmadb-style column
     *                              comments as comments in the structure;
     *                              this is deprecated but the parameter is
     *                              left here because export.php calls
     *                              PMA_exportStructure() also for other
     * @param bool   $do_mime       whether to include mime comments
     * @param bool   $show_dates    whether to include creation/update/check dates
     * @param bool   $add_semicolon whether to add semicolon and end-of-line at
     *                              the end
     * @param bool   $view          whether we're handling a view
     * @param array  $aliases       Aliases of db/table/columns
     *
     * @return bool true
     */
    public function getTableDef(
        $db,
        $table,
        $crlf,
        $error_url,
        $do_relation,
        $do_comments,
        $do_mime,
        $show_dates = false,
        $add_semicolon = true,
        $view = false,
        $aliases = array()
    ) {
        global $cfgRelation;

        $db_alias = $db;
        $table_alias = $table;
        $this->initAlias($aliases, $db_alias, $table_alias);
        /**
         * Gets fields properties
         */
        $GLOBALS['dbi']->selectDb($db);

        // Check if we can use Relations
        list($res_rel, $have_rel) = PMA_getRelationsAndStatus(
            $do_relation && !empty($cfgRelation['relation']),
            $db,
            $table
        );
        /**
         * Displays the table structure
         */
        $GLOBALS['odt_buffer'] .= '<table:table table:name="'
            . htmlspecialchars($table_alias) . '_structure">';
        $columns_cnt = 4;
        if ($do_relation && $have_rel) {
            $columns_cnt++;
        }
        if ($do_comments) {
            $columns_cnt++;
        }
        if ($do_mime && $cfgRelation['mimework']) {
            $columns_cnt++;
        }
        $GLOBALS['odt_buffer'] .= '<table:table-column'
            . ' table:number-columns-repeated="' . $columns_cnt . '"/>';
        /* Header */
        $GLOBALS['odt_buffer'] .= '<table:table-row>'
            . '<table:table-cell office:value-type="string">'
            . '<text:p>' . __('Column') . '</text:p>'
            . '</table:table-cell>'
            . '<table:table-cell office:value-type="string">'
            . '<text:p>' . __('Type') . '</text:p>'
            . '</table:table-cell>'
            . '<table:table-cell office:value-type="string">'
            . '<text:p>' . __('Null') . '</text:p>'
            . '</table:table-cell>'
            . '<table:table-cell office:value-type="string">'
            . '<text:p>' . __('Default') . '</text:p>'
            . '</table:table-cell>';
        if ($do_relation && $have_rel) {
            $GLOBALS['odt_buffer'] .= '<table:table-cell office:value-type="string">'
                . '<text:p>' . __('Links to') . '</text:p>'
                . '</table:table-cell>';
        }
        if ($do_comments) {
            $GLOBALS['odt_buffer'] .= '<table:table-cell office:value-type="string">'
                . '<text:p>' . __('Comments') . '</text:p>'
                . '</table:table-cell>';
            $comments = PMA_getComments($db, $table);
        }
        if ($do_mime && $cfgRelation['mimework']) {
            $GLOBALS['odt_buffer'] .= '<table:table-cell office:value-type="string">'
                . '<text:p>' . __('MIME type') . '</text:p>'
                . '</table:table-cell>';
            $mime_map = PMA_getMIME($db, $table, true);
        }
        $GLOBALS['odt_buffer'] .= '</table:table-row>';

        $columns = $GLOBALS['dbi']->getColumns($db, $table);
        foreach ($columns as $column) {
            $col_as = $field_name = $column['Field'];
            if (!empty($aliases[$db]['tables'][$table]['columns'][$col_as])) {
                $col_as = $aliases[$db]['tables'][$table]['columns'][$col_as];
            }
            $GLOBALS['odt_buffer'] .= $this->formatOneColumnDefinition(
                $column,
                $col_as
            );
            if ($do_relation && $have_rel) {
                $foreigner = PMA_searchColumnInForeigners($res_rel, $field_name);
                if ($foreigner) {
                    $rtable = $foreigner['foreign_table'];
                    $rfield = $foreigner['foreign_field'];
                    if (!empty($aliases[$db]['tables'][$rtable]['columns'][$rfield])
                    ) {
                        $rfield
                            = $aliases[$db]['tables'][$rtable]['columns'][$rfield];
                    }
                    if (!empty($aliases[$db]['tables'][$rtable]['alias'])) {
                        $rtable = $aliases[$db]['tables'][$rtable]['alias'];
                    }
                    $relation = htmlspecialchars($rtable . ' (' . $rfield . ')');
                    $GLOBALS['odt_buffer']
                        .= '<table:table-cell office:value-type="string">'
                        . '<text:p>'
                        . htmlspecialchars($relation)
                        . '</text:p>'
                        . '</table:table-cell>';
                }
            }
            if ($do_comments) {
                if (isset($comments[$field_name])) {
                    $GLOBALS['odt_buffer']
                        .= '<table:table-cell office:value-type="string">'
                        . '<text:p>'
                        . htmlspecialchars($comments[$field_name])
                        . '</text:p>'
                        . '</table:table-cell>';
                } else {
                    $GLOBALS['odt_buffer']
                        .= '<table:table-cell office:value-type="string">'
                        . '<text:p></text:p>'
                        . '</table:table-cell>';
                }
            }
            if ($do_mime && $cfgRelation['mimework']) {
                if (isset($mime_map[$field_name])) {
                    $GLOBALS['odt_buffer']
                        .= '<table:table-cell office:value-type="string">'
                        . '<text:p>'
                        . htmlspecialchars(
                            str_replace('_', '/', $mime_map[$field_name]['mimetype'])
                        )
                        . '</text:p>'
                        . '</table:table-cell>';
                } else {
                    $GLOBALS['odt_buffer']
                        .= '<table:table-cell office:value-type="string">'
                        . '<text:p></text:p>'
                        . '</table:table-cell>';
                }
            }
            $GLOBALS['odt_buffer'] .= '</table:table-row>';
        } // end foreach

        $GLOBALS['odt_buffer'] .= '</table:table>';

        return true;
    } // end of the '$this->getTableDef()' function

    /**
     * Outputs triggers
     *
     * @param string $db      database name
     * @param string $table   table name
     * @param array  $aliases Aliases of db/table/columns
     *
     * @return bool true
     */
    protected function getTriggers($db, $table, $aliases = array())
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
     * @param string $export_mode 'create_table', 'triggers', 'create_view',
     *                            'stand_in'
     * @param string $export_type 'server', 'database', 'table'
     * @param bool   $do_relation whether to include relation comments
     * @param bool   $do_comments whether to include the pmadb-style column
     *                            comments as comments in the structure;
     *                            this is deprecated but the parameter is
     *                            left here because export.php calls
     *                            PMA_exportStructure() also for other
     * @param bool   $do_mime     whether to include mime comments
     * @param bool   $dates       whether to include creation/update/check dates
     * @param array  $aliases     Aliases of db/table/columns
     *
     * @return bool Whether it succeeded
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
    } // end of the '$this->exportStructure' function

    /**
     * Formats the definition for one column
     *
     * @param array  $column info about this column
     * @param string $col_as column alias
     *
     * @return string Formatted column definition
     */
    protected function formatOneColumnDefinition($column, $col_as = '')
    {
        if (empty($col_as)) {
            $col_as = $column['Field'];
        }
        $definition = '<table:table-row>';
        $definition .= '<table:table-cell office:value-type="string">'
            . '<text:p>' . htmlspecialchars($col_as) . '</text:p>'
            . '</table:table-cell>';

        $extracted_columnspec
            = Util::extractColumnSpec($column['Type']);
        $type = htmlspecialchars($extracted_columnspec['print_type']);
        if (empty($type)) {
            $type = '&nbsp;';
        }

        $definition .= '<table:table-cell office:value-type="string">'
            . '<text:p>' . htmlspecialchars($type) . '</text:p>'
            . '</table:table-cell>';
        if (!isset($column['Default'])) {
            if ($column['Null'] != 'NO') {
                $column['Default'] = 'NULL';
            } else {
                $column['Default'] = '';
            }
        }
        $definition .= '<table:table-cell office:value-type="string">'
            . '<text:p>'
            . (($column['Null'] == '' || $column['Null'] == 'NO')
                ? __('No')
                : __('Yes'))
            . '</text:p>'
            . '</table:table-cell>';
        $definition .= '<table:table-cell office:value-type="string">'
            . '<text:p>' . htmlspecialchars($column['Default']) . '</text:p>'
            . '</table:table-cell>';

        return $definition;
    }
}
