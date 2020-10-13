<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Set of methods used to build dumps of tables as Latex
 *
 * @package    PhpMyAdmin-Export
 * @subpackage Latex
 */
namespace PMA\libraries\plugins\export;

use PMA\libraries\properties\options\items\BoolPropertyItem;
use PMA\libraries\properties\plugins\ExportPluginProperties;
use PMA\libraries\properties\options\groups\OptionsPropertyMainGroup;
use PMA\libraries\properties\options\groups\OptionsPropertyRootGroup;
use PMA\libraries\plugins\ExportPlugin;
use PMA\libraries\DatabaseInterface;
use PMA\libraries\Util;
use PMA\libraries\properties\options\items\RadioPropertyItem;
use PMA\libraries\properties\options\items\TextPropertyItem;

/**
 * Handles the export for the Latex format
 *
 * @package    PhpMyAdmin-Export
 * @subpackage Latex
 */
class ExportLatex extends ExportPlugin
{
    /**
     * Constructor
     */
    public function __construct()
    {
        // initialize the specific export sql variables
        $this->initSpecificVariables();

        $this->setProperties();
    }

    /**
     * Initialize the local variables that are used for export Latex
     *
     * @return void
     */
    protected function initSpecificVariables()
    {
        /* Messages used in default captions */
        $GLOBALS['strLatexContent'] = __('Content of table @TABLE@');
        $GLOBALS['strLatexContinued'] = __('(continued)');
        $GLOBALS['strLatexStructure'] = __('Structure of table @TABLE@');
    }

    /**
     * Sets the export Latex properties
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
        $exportPluginProperties->setText('LaTeX');
        $exportPluginProperties->setExtension('tex');
        $exportPluginProperties->setMimeType('application/x-tex');
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
        $leaf = new BoolPropertyItem(
            "caption",
            __('Include table caption')
        );
        $generalOptions->addProperty($leaf);
        // add the main group to the root group
        $exportSpecificOptions->addProperty($generalOptions);

        // what to dump (structure/data/both) main group
        $dumpWhat = new OptionsPropertyMainGroup(
            "dump_what",
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
            $leaf = new TextPropertyItem(
                "structure_caption",
                __('Table caption:')
            );
            $leaf->setDoc('faq6-27');
            $structureOptions->addProperty($leaf);
            $leaf = new TextPropertyItem(
                "structure_continued_caption",
                __('Table caption (continued):')
            );
            $leaf->setDoc('faq6-27');
            $structureOptions->addProperty($leaf);
            $leaf = new TextPropertyItem(
                "structure_label",
                __('Label key:')
            );
            $leaf->setDoc('faq6-27');
            $structureOptions->addProperty($leaf);
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
            __('Put columns names in the first row:')
        );
        $dataOptions->addProperty($leaf);
        $leaf = new TextPropertyItem(
            "data_caption",
            __('Table caption:')
        );
        $leaf->setDoc('faq6-27');
        $dataOptions->addProperty($leaf);
        $leaf = new TextPropertyItem(
            "data_continued_caption",
            __('Table caption (continued):')
        );
        $leaf->setDoc('faq6-27');
        $dataOptions->addProperty($leaf);
        $leaf = new TextPropertyItem(
            "data_label",
            __('Label key:')
        );
        $leaf->setDoc('faq6-27');
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
     * Outputs the content of a table in JSON format
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
    } // end getTableLaTeX

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
     *                            exportStructure() also for other
     *                            export types which use this parameter
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
    } // end of the 'exportStructure' method

    /**
     * Escapes some special characters for use in TeX/LaTeX
     *
     * @param string $string the string to convert
     *
     * @return string the converted string with escape codes
     */
    public static function texEscape($string)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
