<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Contains PMA\libraries\plugins\schema\pdf\TableStatsPdf class
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\pdf;

use PMA\libraries\plugins\schema\ExportRelationSchema;
use PMA\libraries\plugins\schema\TableStats;
use PMA\libraries\PDF as PDF_lib;

/**
 * Table preferences/statistics
 *
 * This class preserves the table co-ordinates,fields
 * and helps in drawing/generating the Tables in PDF document.
 *
 * @name    Table_Stats_Pdf
 * @package PhpMyAdmin
 * @see     PMA_Schema_PDF
 */
class TableStatsPdf extends TableStats
{
    /**
     * Defines properties
     */
    public $nb_fiels;
    public $height;
    private $_ff = PDF_lib::PMA_PDF_FONT;

    /**
     * The "PMA\libraries\plugins\schema\pdf\TableStatsPdf" constructor
     *
     * @param object  $diagram        The PDF diagram
     * @param string  $db             The database name
     * @param string  $tableName      The table name
     * @param integer $fontSize       The font size
     * @param integer $pageNumber     The current page number (from the
     *                                $cfg['Servers'][$i]['table_coords'] table)
     * @param integer &$sameWideWidth The max. width among tables
     * @param boolean $showKeys       Whether to display keys or not
     * @param boolean $tableDimension Whether to display table position or not
     * @param boolean $offline        Whether the coordinates are sent
     *                                from the browser
     *
     * @see PMA_Schema_PDF, Table_Stats_Pdf::Table_Stats_setWidth,
     *     PMA\libraries\plugins\schema\pdf\TableStatsPdf::Table_Stats_setHeight
     */
    public function __construct(
        $diagram,
        $db,
        $tableName,
        $fontSize,
        $pageNumber,
        &$sameWideWidth,
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
     * Returns title of the current table,
     * title can have the dimensions of the table
     *
     * @return string
     */
    protected function getTitle()
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
     * @param integer $fontSize The font size
     *
     * @access private
     *
     * @return void
     *
     * @see    PMA_Schema_PDF
     */
    private function _setWidth($fontSize)
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
     * @return void
     *
     * @access private
     */
    private function _setHeight()
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
     * @param integer         $fontSize The font size
     * @param boolean         $withDoc  Whether to include links to documentation
     * @param boolean|integer $setColor Whether to display color
     *
     * @access public
     *
     * @return void
     *
     * @see    PMA_Schema_PDF
     */
    public function tableDraw($fontSize, $withDoc, $setColor = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
