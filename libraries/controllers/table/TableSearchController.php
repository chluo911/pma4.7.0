<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Holds the PMA\libraries\controllers\table\TableSearchController
 *
 * @package PMA\libraries\controllers\table
 */

namespace PMA\libraries\controllers\table;

use PMA\libraries\Util;
use PMA\libraries\Template;
use PMA\libraries\controllers\TableController;
use PMA\libraries\DatabaseInterface;

require_once 'libraries/sql.lib.php';

/**
 * Class TableSearchController
 *
 * @package PhpMyAdmin
 */
class TableSearchController extends TableController
{
    /**
     * Normal search or Zoom search
     *
     * @access private
     * @var string
     */
    private $_searchType;
    /**
     * Names of columns
     *
     * @access private
     * @var array
     */
    private $_columnNames;
    /**
     * Types of columns
     *
     * @access private
     * @var array
     */
    private $_columnTypes;
    /**
     * Collations of columns
     *
     * @access private
     * @var array
     */
    private $_columnCollations;
    /**
     * Null Flags of columns
     *
     * @access private
     * @var array
     */
    private $_columnNullFlags;
    /**
     * Whether a geometry column is present
     *
     * @access private
     * @var boolean
     */
    private $_geomColumnFlag;
    /**
     * Foreign Keys
     *
     * @access private
     * @var array
     */
    private $_foreigners;
    /**
     * Connection charset
     *
     * @access private
     * @var string
     */
    private $_connectionCharSet;

    protected $url_query;

    /**
     * Constructor
     *
     * @param string $searchType Search type
     * @param string $url_query  URL query
     */
    public function __construct($searchType, $url_query)
    {
        parent::__construct();

        $this->url_query = $url_query;
        $this->_searchType = $searchType;
        $this->_columnNames = array();
        $this->_columnNullFlags = array();
        $this->_columnTypes = array();
        $this->_columnCollations = array();
        $this->_geomColumnFlag = false;
        $this->_foreigners = array();
        // Loads table's information
        $this->_loadTableInfo();
        $this->_connectionCharSet = $this->dbi->fetchValue(
            "SELECT @@character_set_connection"
        );
    }

    /**
     * Gets all the columns of a table along with their types, collations
     * and whether null or not.
     *
     * @return void
     */
    private function _loadTableInfo()
    {
        // Gets the list and number of columns
        $columns = $this->dbi->getColumns(
            $this->db,
            $this->table,
            null,
            true
        );
        // Get details about the geometry functions
        $geom_types = Util::getGISDatatypes();

        foreach ($columns as $row) {
            // set column name
            $this->_columnNames[] = $row['Field'];

            $type = $row['Type'];
            // check whether table contains geometric columns
            if (in_array($type, $geom_types)) {
                $this->_geomColumnFlag = true;
            }
            // reformat mysql query output
            if (strncasecmp($type, 'set', 3) == 0
                || strncasecmp($type, 'enum', 4) == 0
            ) {
                $type = str_replace(',', ', ', $type);
            } else {
                // strip the "BINARY" attribute, except if we find "BINARY(" because
                // this would be a BINARY or VARBINARY column type
                if (! preg_match('@BINARY[\(]@i', $type)) {
                    $type = preg_replace('@BINARY@i', '', $type);
                }
                $type = preg_replace('@ZEROFILL@i', '', $type);
                $type = preg_replace('@UNSIGNED@i', '', $type);
                $type = mb_strtolower($type);
            }
            if (empty($type)) {
                $type = '&nbsp;';
            }
            $this->_columnTypes[] = $type;
            $this->_columnNullFlags[] = $row['Null'];
            $this->_columnCollations[]
                = ! empty($row['Collation']) && $row['Collation'] != 'NULL'
                ? $row['Collation']
                : '';
        } // end for

        // Retrieve foreign keys
        $this->_foreigners = PMA_getForeigners($this->db, $this->table);
    }

    /**
     * Index action
     *
     * @return void
     */
    public function indexAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Zoom submit action
     *
     * @param string $dataLabel Data label
     * @param string $goto      Goto
     *
     * @return void
     */
    public function zoomSubmitAction($dataLabel, $goto)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Change table info action
     *
     * @return void
     */
    public function changeTableInfoAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get data row action
     *
     * @return void
     */
    public function getDataRowAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Do selection action
     *
     * @return void
     */
    public function doSelectionAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Display selection form action
     *
     * @return void
     */
    public function displaySelectionFormAction($datalabel = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Range search action
     *
     * @return void
     */
    public function rangeSearchAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Find action
     *
     * @return void
     */
    public function findAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Replace action
     *
     * @return void
     */
    public function replaceAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns HTML for previewing strings found and their replacements
     *
     * @param int     $columnIndex index of the column
     * @param string  $find        string to find in the column
     * @param string  $replaceWith string to replace with
     * @param boolean $useRegex    to use Regex replace or not
     * @param string  $charSet     character set of the connection
     *
     * @return string HTML for previewing strings found and their replacements
     */
    public function getReplacePreview(
        $columnIndex,
        $find,
        $replaceWith,
        $useRegex,
        $charSet
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Finds and returns Regex pattern and their replacements
     *
     * @param int    $columnIndex index of the column
     * @param string $find        string to find in the column
     * @param string $replaceWith string to replace with
     * @param string $charSet     character set of the connection
     *
     * @return array Array containing original values, replaced values and count
     */
    private function _getRegexReplaceRows(
        $columnIndex,
        $find,
        $replaceWith,
        $charSet
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Replaces a given string in a column with a give replacement
     *
     * @param int     $columnIndex index of the column
     * @param string  $find        string to find in the column
     * @param string  $replaceWith string to replace with
     * @param boolean $useRegex    to use Regex replace or not
     * @param string  $charSet     character set of the connection
     *
     * @return void
     */
    public function replace(
        $columnIndex,
        $find,
        $replaceWith,
        $useRegex,
        $charSet
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Finds minimum and maximum value of a given column.
     *
     * @param string $column Column name
     *
     * @return array
     */
    public function getColumnMinMax($column)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns an array with necessary configurations to create
     * sub-tabs in the table_select page.
     *
     * @return array Array containing configuration (icon, text, link, id, args)
     * of sub-tabs
     */
    private function _getSubTabs()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Builds the sql search query from the post parameters
     *
     * @return string the generated SQL query
     */
    private function _buildSqlQuery()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Provides a column's type, collation, operators list, and criteria value
     * to display in table search form
     *
     * @param integer $search_index Row number in table search form
     * @param integer $column_index Column index in ColumnNames array
     *
     * @return array Array containing column's properties
     */
    public function getColumnProperties($search_index, $column_index)
    {
        $selected_operator = (isset($_POST['criteriaColumnOperators'][$search_index])
            ? $_POST['criteriaColumnOperators'][$search_index] : '');
        $entered_value = (isset($_POST['criteriaValues'])
            ? $_POST['criteriaValues'] : '');
        $titles = array(
            'Browse' => Util::getIcon(
                'b_browse.png',
                __('Browse foreign values')
            )
        );
        //Gets column's type and collation
        $type = $this->_columnTypes[$column_index];
        $collation = $this->_columnCollations[$column_index];
        //Gets column's comparison operators depending on column type
        $func = Template::get('table/search/column_comparison_operators')->render(
            array(
                'search_index' => $search_index,
                'columnTypes' => $this->_columnTypes,
                'column_index' => $column_index,
                'columnNullFlags' => $this->_columnNullFlags,
                'selected_operator' => $selected_operator
            )
        );
        //Gets link to browse foreign data(if any) and criteria inputbox
        $foreignData = PMA_getForeignData(
            $this->_foreigners,
            $this->_columnNames[$column_index],
            false,
            '',
            ''
        );
        $value = Template::get('table/search/input_box')->render(
            array(
                'str' => '',
                'column_type' => (string) $type,
                'column_id' => 'fieldID_',
                'in_zoom_search_edit' => false,
                '_foreigners' => $this->_foreigners,
                'column_name' => $this->_columnNames[$column_index],
                'foreignData' => $foreignData,
                'table' => $this->table,
                'column_index' => $search_index,
                'foreignMaxLimit' => $GLOBALS['cfg']['ForeignKeyMaxLimit'],
                'criteriaValues' => $entered_value,
                'db' => $this->db,
                'titles' => $titles,
                'in_fbs' => true
            )
        );
        return array(
            'type' => $type,
            'collation' => $collation,
            'func' => $func,
            'value' => $value
        );
    }

    /**
     * Generates the where clause for the SQL search query to be executed
     *
     * @return string the generated where clause
     */
    private function _generateWhereClause()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return the where clause in case column's type is ENUM.
     *
     * @param mixed  $criteriaValues Search criteria input
     * @param string $func_type      Search function/operator
     *
     * @return string part of where clause.
     */
    private function _getEnumWhereClause($criteriaValues, $func_type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return the where clause for a geometrical column.
     *
     * @param mixed  $criteriaValues Search criteria input
     * @param string $names          Name of the column on which search is submitted
     * @param string $func_type      Search function/operator
     * @param string $types          Type of the field
     * @param bool   $geom_func      Whether geometry functions should be applied
     *
     * @return string part of where clause.
     */
    private function _getGeomWhereClause(
        $criteriaValues,
        $names,
        $func_type,
        $types,
        $geom_func = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return the where clause for query generation based on the inputs provided.
     *
     * @param mixed  $criteriaValues Search criteria input
     * @param string $names          Name of the column on which search is submitted
     * @param string $types          Type of the field
     * @param string $func_type      Search function/operator
     * @param bool   $unaryFlag      Whether operator unary or not
     * @param bool   $geom_func      Whether geometry functions should be applied
     *
     * @return string generated where clause.
     */
    private function _getWhereClause(
        $criteriaValues,
        $names,
        $types,
        $func_type,
        $unaryFlag,
        $geom_func = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
