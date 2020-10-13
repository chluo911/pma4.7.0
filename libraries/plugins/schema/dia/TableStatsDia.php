<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Contains PMA\libraries\plugins\schema\dia\TableStatsDia class
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\dia;

use PMA\libraries\plugins\schema\ExportRelationSchema;
use PMA\libraries\plugins\schema\TableStats;

/**
 * Table preferences/statistics
 *
 * This class preserves the table co-ordinates,fields
 * and helps in drawing/generating the Tables in dia XML document.
 *
 * @package PhpMyAdmin
 * @name    Table_Stats_Dia
 * @see     PMA_DIA
 */
class TableStatsDia extends TableStats
{
    public $tableId;
    public $tableColor;

    /**
     * The "PMA\libraries\plugins\schema\dia\TableStatsDia" constructor
     *
     * @param object  $diagram    The current dia document
     * @param string  $db         The database name
     * @param string  $tableName  The table name
     * @param integer $pageNumber The current page number (from the
     *                            $cfg['Servers'][$i]['table_coords'] table)
     * @param boolean $showKeys   Whether to display ONLY keys or not
     * @param boolean $offline    Whether the coordinates are sent from the browser
     */
    public function __construct(
        $diagram,
        $db,
        $tableName,
        $pageNumber,
        $showKeys = false,
        $offline = false
    ) {
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
     */
    protected function showMissingTableError()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Do draw the table
     *
     * Tables are generated using object type Database - Table
     * primary fields are underlined in tables. Dia object
     * is used to generate the XML of Dia Document. Database Table
     * Object and their attributes are involved in the combination
     * of displaying Database - Table on Dia Document.
     *
     * @param boolean $showColor Whether to show color for tables text or not
     *                           if showColor is true then an array of $listOfColors
     *                           will be used to choose the random colors for tables
     *                           text we can change/add more colors to this array
     *
     * @return void
     *
     * @access public
     * @see    Dia
     */
    public function tableDraw($showColor)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
