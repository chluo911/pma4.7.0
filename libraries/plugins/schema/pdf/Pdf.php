<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * PDF schema handling
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\pdf;

use PMA\libraries\PDF as PDF_lib;
use PMA\libraries\Util;

/**
 * Skip the plugin if TCPDF is not available.
 */
if (! class_exists('TCPDF')) {
    $GLOBALS['skip_import'] = true;
    return;
}

/**
 * block attempts to directly run this script
 */
if (getcwd() == dirname(__FILE__)) {
    die('Attack stopped');
}

require_once 'libraries/transformations.lib.php';

/**
 * Extends the "TCPDF" class and helps
 * in developing the structure of PDF Schema Export
 *
 * @access  public
 * @package PhpMyAdmin
 * @see     TCPDF
 */
class Pdf extends PDF_lib
{
    /**
     * Defines properties
     */
    public $_xMin;
    public $_yMin;
    public $leftMargin = 10;
    public $topMargin = 10;
    public $scale;
    public $PMA_links;
    public $Outlines = array();
    public $def_outlines;
    public $widths;
    private $_ff = PDF_lib::PMA_PDF_FONT;
    private $_offline;
    private $_pageNumber;
    private $_withDoc;
    private $_db;

    /**
     * Constructs PDF for schema export.
     *
     * @param string  $orientation page orientation
     * @param string  $unit        unit
     * @param string  $paper       the format used for pages
     * @param int     $pageNumber  schema page number that is being exported
     * @param boolean $withDoc     with document dictionary
     * @param string  $db          the database name
     *
     * @access public
     */
    public function __construct(
        $orientation,
        $unit,
        $paper,
        $pageNumber,
        $withDoc,
        $db
    ) {
        parent::__construct($orientation, $unit, $paper);
        $this->_pageNumber = $pageNumber;
        $this->_withDoc = $withDoc;
        $this->_db = $db;
    }

    /**
     * Sets the value for margins
     *
     * @param float $c_margin margin
     *
     * @return void
     */
    public function setCMargin($c_margin)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the scaling factor, defines minimum coordinates and margins
     *
     * @param float|int $scale      The scaling factor
     * @param float|int $xMin       The minimum X coordinate
     * @param float|int $yMin       The minimum Y coordinate
     * @param float|int $leftMargin The left margin
     * @param float|int $topMargin  The top margin
     *
     * @return void
     */
    public function setScale(
        $scale = 1,
        $xMin = 0,
        $yMin = 0,
        $leftMargin = -1,
        $topMargin = -1
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Outputs a scaled cell
     *
     * @param float|int $w      The cell width
     * @param float|int $h      The cell height
     * @param string    $txt    The text to output
     * @param mixed     $border Whether to add borders or not
     * @param integer   $ln     Where to put the cursor once the output is done
     * @param string    $align  Align mode
     * @param integer   $fill   Whether to fill the cell with a color or not
     * @param string    $link   Link
     *
     * @return void
     *
     * @see TCPDF::Cell()
     */
    public function cellScale(
        $w,
        $h = 0,
        $txt = '',
        $border = 0,
        $ln = 0,
        $align = '',
        $fill = 0,
        $link = ''
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draws a scaled line
     *
     * @param float $x1 The horizontal position of the starting point
     * @param float $y1 The vertical position of the starting point
     * @param float $x2 The horizontal position of the ending point
     * @param float $y2 The vertical position of the ending point
     *
     * @return void
     *
     * @see TCPDF::Line()
     */
    public function lineScale($x1, $y1, $x2, $y2)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets x and y scaled positions
     *
     * @param float $x The x position
     * @param float $y The y position
     *
     * @return void
     *
     * @see TCPDF::SetXY()
     */
    public function setXyScale($x, $y)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the X scaled positions
     *
     * @param float $x The x position
     *
     * @return void
     *
     * @see TCPDF::SetX()
     */
    public function setXScale($x)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the scaled font size
     *
     * @param float $size The font size (in points)
     *
     * @return void
     *
     * @see TCPDF::SetFontSize()
     */
    public function setFontSizeScale($size)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the scaled line width
     *
     * @param float $width The line width
     *
     * @return void
     *
     * @see TCPDF::SetLineWidth()
     */
    public function setLineWidthScale($width)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This method is used to render the page header.
     *
     * @return void
     *
     * @see TCPDF::Header()
     */
    public function Header()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * This function must be named "Footer" to work with the TCPDF library
     *
     * @return void
     *
     * @see PDF::Footer()
     */
    public function Footer()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets widths
     *
     * @param array $w array of widths
     *
     * @return void
     */
    public function SetWidths($w)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates table row.
     *
     * @param array $data  Data for table
     * @param array $links Links for table cells
     *
     * @return void
     */
    public function Row($data, $links)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Compute number of lines used by a multicell of width w
     *
     * @param int    $w   width
     * @param string $txt text
     *
     * @return int
     */
    public function NbLines($w, $txt)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set whether the document is generated from client side DB
     *
     * @param string $value whether offline
     *
     * @return void
     *
     * @access private
     */
    public function setOffline($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
