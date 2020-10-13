<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Set of functions used to build NHibernate dumps of tables
 *
 * @package    PhpMyAdmin-Export
 * @subpackage CodeGen
 */
namespace PMA\libraries\plugins\export;

use PMA\libraries\plugins\ExportPlugin;
use PMA\libraries\properties\plugins\ExportPluginProperties;
use PMA\libraries\properties\options\items\HiddenPropertyItem;
use PMA\libraries\properties\options\groups\OptionsPropertyMainGroup;
use PMA\libraries\properties\options\groups\OptionsPropertyRootGroup;
use PMA;
use PMA\libraries\properties\options\items\SelectPropertyItem;
use PMA\libraries\plugins\export\TableProperty;

/**
 * Handles the export for the CodeGen class
 *
 * @package    PhpMyAdmin-Export
 * @subpackage CodeGen
 */
class ExportCodegen extends ExportPlugin
{
    /**
     * CodeGen Formats
     *
     * @var array
     */
    private $_cgFormats;
    /**
     * CodeGen Handlers
     *
     * @var array
     */
    private $_cgHandlers;

    /**
     * Constructor
     */
    public function __construct()
    {
        // initialize the specific export CodeGen variables
        $this->initSpecificVariables();
        $this->setProperties();
    }

    /**
     * Initialize the local variables that are used for export CodeGen
     *
     * @return void
     */
    protected function initSpecificVariables()
    {
        $this->_setCgFormats(
            array(
                "NHibernate C# DO",
                "NHibernate XML",
            )
        );

        $this->_setCgHandlers(
            array(
                "_handleNHibernateCSBody",
                "_handleNHibernateXMLBody",
            )
        );
    }

    /**
     * Sets the export CodeGen properties
     *
     * @return void
     */
    protected function setProperties()
    {
        $exportPluginProperties = new ExportPluginProperties();
        $exportPluginProperties->setText('CodeGen');
        $exportPluginProperties->setExtension('cs');
        $exportPluginProperties->setMimeType('text/cs');
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
        $leaf = new SelectPropertyItem(
            "format",
            __('Format:')
        );
        $leaf->setValues($this->_getCgFormats());
        $generalOptions->addProperty($leaf);
        // add the main group to the root group
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
     * Used to make identifiers (from table or database names)
     *
     * @param string $str     name to be converted
     * @param bool   $ucfirst whether to make the first character uppercase
     *
     * @return string identifier
     */
    public static function cgMakeIdentifier($str, $ucfirst = true)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * C# Handler
     *
     * @param string $db      database name
     * @param string $table   table name
     * @param string $crlf    line separator
     * @param array  $aliases Aliases of db/table/columns
     *
     * @return string containing C# code lines, separated by "\n"
     */
    private function _handleNHibernateCSBody($db, $table, $crlf, $aliases = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * XML Handler
     *
     * @param string $db      database name
     * @param string $table   table name
     * @param string $crlf    line separator
     * @param array  $aliases Aliases of db/table/columns
     *
     * @return string containing XML code lines, separated by "\n"
     */
    private function _handleNHibernateXMLBody(
        $db,
        $table,
        $crlf,
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
     * Getter for CodeGen formats
     *
     * @return array
     */
    private function _getCgFormats()
    {
        return $this->_cgFormats;
    }

    /**
     * Setter for CodeGen formats
     *
     * @param array $CG_FORMATS contains CodeGen Formats
     *
     * @return void
     */
    private function _setCgFormats($CG_FORMATS)
    {
        $this->_cgFormats = $CG_FORMATS;
    }

    /**
     * Getter for CodeGen handlers
     *
     * @return array
     */
    private function _getCgHandlers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Setter for CodeGen handlers
     *
     * @param array $CG_HANDLERS contains CodeGen handler methods
     *
     * @return void
     */
    private function _setCgHandlers($CG_HANDLERS)
    {
        $this->_cgHandlers = $CG_HANDLERS;
    }
}
