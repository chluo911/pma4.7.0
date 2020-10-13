<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Contains abstract class to hold table preferences/statistics
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema;

use PMA;

/**
 * Table preferences/statistics
 *
 * This class preserves the table co-ordinates,fields
 * and helps in drawing/generating the tables.
 *
 * @package PhpMyAdmin
 * @abstract
 */
abstract class TableStats
{
    protected $diagram;
    protected $db;
    protected $pageNumber;
    protected $tableName;
    protected $showKeys;
    protected $tableDimension;
    public $displayfield;
    public $fields = array();
    public $primary = array();
    public $x;
    public $y;
    public $width = 0;
    public $heightCell = 0;
    protected $offline;

    /**
     * Constructor
     *
     * @param object  $diagram        schema diagram
     * @param string  $db             current db name
     * @param integer $pageNumber     current page number (from the
     *                                $cfg['Servers'][$i]['table_coords'] table)
     * @param string  $tableName      table name
     * @param boolean $showKeys       whether to display keys or not
     * @param boolean $tableDimension whether to display table position or not
     * @param boolean $offline        whether the coordinates are sent
     *                                from the browser
     */
    public function __construct(
        $diagram,
        $db,
        $pageNumber,
        $tableName,
        $showKeys,
        $tableDimension,
        $offline
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Validate whether the table exists.
     *
     * @return void
     */
    protected function validateTableAndLoadFields()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Displays an error when the table cannot be found.
     *
     * @return void
     * @abstract
     */
    abstract protected function showMissingTableError();

    /**
     * Loads coordinates of a table
     *
     * @return void
     */
    protected function loadCoordinates()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Loads the table's display field
     *
     * @return void
     */
    protected function loadDisplayField()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Loads the PRIMARY key.
     *
     * @return void
     */
    protected function loadPrimaryKey()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns title of the current table,
     * title can have the dimensions/co-ordinates of the table
     *
     * @return string title of the current table
     */
    protected function getTitle()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
