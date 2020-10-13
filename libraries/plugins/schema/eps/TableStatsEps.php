<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Contains PMA\libraries\plugins\schema\eps\TableStatsEps class
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\eps;

use PMA;
use PMA\libraries\plugins\schema\ExportRelationSchema;
use PMA\libraries\plugins\schema\TableStats;

/**
 * Table preferences/statistics
 *
 * This class preserves the table co-ordinates,fields
 * and helps in drawing/generating the Tables in EPS.
 *
 * @package PhpMyAdmin
 * @name    Table_Stats_Eps
 * @see     PMA_EPS
 */
class TableStatsEps extends TableStats
{
    /**
     * Defines properties
     */
    public $height;
    public $currentCell = 0;

    /**
     * The "PMA\libraries\plugins\schema\eps\TableStatsEps" constructor
     *
     * @param object  $diagram          The EPS diagram
     * @param string  $db               The database name
     * @param string  $tableName        The table name
     * @param string  $font             The font  name
     * @param integer $fontSize         The font size
     * @param integer $pageNumber       Page number
     * @param integer &$same_wide_width The max width among tables
     * @param boolean $showKeys         Whether to display keys or not
     * @param boolean $tableDimension   Whether to display table position or not
     * @param boolean $offline          Whether the coordinates are sent
     *                                  from the browser
     *
     * @see PMA_EPS, Table_Stats_Eps::Table_Stats_setWidth,
     *      PMA\libraries\plugins\schema\eps\TableStatsEps::Table_Stats_setHeight
     */
    public function __construct(
        $diagram,
        $db,
        $tableName,
        $font,
        $fontSize,
        $pageNumber,
        &$same_wide_width,
        $showKeys = false,
        $tableDimension = false,
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
     * Sets the width of the table
     *
     * @param string  $font     The font name
     * @param integer $fontSize The font size
     *
     * @return void
     *
     * @see PMA_EPS
     */
    private function _setWidthTable($font, $fontSize)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the height of the table
     *
     * @param integer $fontSize The font size
     *
     * @return void
     */
    private function _setHeightTable($fontSize)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draw the table
     *
     * @param boolean $showColor Whether to display color
     *
     * @return void
     *
     * @see PMA_EPS,PMA_EPS::line,PMA_EPS::rect
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
