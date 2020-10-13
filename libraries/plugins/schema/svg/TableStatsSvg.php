<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Contains PMA\libraries\plugins\schema\svg\TableStatsSvg class
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\svg;

use PMA;
use PMA\libraries\plugins\schema\ExportRelationSchema;
use PMA\libraries\plugins\schema\TableStats;

/**
 * Table preferences/statistics
 *
 * This class preserves the table co-ordinates,fields
 * and helps in drawing/generating the Tables in SVG XML document.
 *
 * @package PhpMyAdmin
 * @name    Table_Stats_Svg
 * @see     PMA_SVG
 */
class TableStatsSvg extends TableStats
{
    /**
     * Defines properties
     */
    public $height;
    public $currentCell = 0;

    /**
     * The "PMA\libraries\plugins\schema\svg\TableStatsSvg" constructor
     *
     * @param object  $diagram          The current SVG image document
     * @param string  $db               The database name
     * @param string  $tableName        The table name
     * @param string  $font             Font face
     * @param integer $fontSize         The font size
     * @param integer $pageNumber       Page number
     * @param integer &$same_wide_width The max. width among tables
     * @param boolean $showKeys         Whether to display keys or not
     * @param boolean $tableDimension   Whether to display table position or not
     * @param boolean $offline          Whether the coordinates are sent
     *
     *
     * @see PMA_SVG, Table_Stats_Svg::Table_Stats_setWidth,
     *       PMA\libraries\plugins\schema\svg\TableStatsSvg::Table_Stats_setHeight
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
     * @param string  $font     The font size
     * @param integer $fontSize The font size
     *
     * @return void
     * @access private
     *
     * @see    PMA_SVG
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
     * @param integer $fontSize font size
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
     * draw the table
     *
     * @param boolean $showColor Whether to display color
     *
     * @access public
     * @return void
     *
     * @see    PMA_SVG,PMA_SVG::printElement
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
