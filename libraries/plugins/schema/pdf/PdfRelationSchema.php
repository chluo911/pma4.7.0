<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * PDF schema handling
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\pdf;

use PMA\libraries\plugins\schema\ExportRelationSchema;
use PMA\libraries\Util;
use PMA\libraries\PDF as PDF_lib;

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
 * Pdf Relation Schema Class
 *
 * Purpose of this class is to generate the PDF Document. PDF is widely
 * used format for documenting text,fonts,images and 3d vector graphics.
 *
 * This class inherits ExportRelationSchema class has common functionality added
 * to this class
 *
 * @name Pdf_Relation_Schema
 * @package PhpMyAdmin
 */
class PdfRelationSchema extends ExportRelationSchema
{
    /**
     * Defines properties
     */
    private $_showGrid;
    private $_withDoc;
    private $_tableOrder;

    /**
     * @var TableStatsPdf[]
     */
    private $_tables = array();
    private $_ff = PDF_lib::PMA_PDF_FONT;
    private $_xMax = 0;
    private $_yMax = 0;
    private $_scale;
    private $_xMin = 100000;
    private $_yMin = 100000;
    private $_topMargin = 10;
    private $_bottomMargin = 10;
    private $_leftMargin = 10;
    private $_rightMargin = 10;
    private $_tablewidth;

    /**
     * @var RelationStatsPdf[]
     */
    protected $relations = array();

    /**
     * The "PdfRelationSchema" constructor
     *
     * @param string $db database name
     *
     * @see PMA_Schema_PDF
     */
    public function __construct($db)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set Show Grid
     *
     * @param boolean $value show grid of the document or not
     *
     * @return void
     */
    public function setShowGrid($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns whether to show grid
     *
     * @return boolean whether to show grid
     */
    public function isShowGrid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set Data Dictionary
     *
     * @param boolean $value show selected database data dictionary or not
     *
     * @return void
     */
    public function setWithDataDictionary($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Return whether to show selected database data dictionary or not
     *
     * @return boolean whether to show selected database data dictionary or not
     */
    public function isWithDataDictionary()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the order of the table in data dictionary
     *
     * @param string $value table order
     *
     * @return void
     */
    public function setTableOrder($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the order of the table in data dictionary
     *
     * @return string table order
     */
    public function getTableOrder()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Output Pdf Document for download
     *
     * @return void
     */
    public function showOutput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets X and Y minimum and maximum for a table cell
     *
     * @param TableStatsPdf $table The table name of which sets XY co-ordinates
     *
     * @return void
     */
    private function _setMinMax($table)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Defines relation objects
     *
     * @param string $masterTable  The master table name
     * @param string $masterField  The relation field in the master table
     * @param string $foreignTable The foreign table name
     * @param string $foreignField The relation field in the foreign table
     *
     * @return void
     *
     * @see _setMinMax
     */
    private function _addRelation(
        $masterTable,
        $masterField,
        $foreignTable,
        $foreignField
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draws the grid
     *
     * @return void
     *
     * @see PMA_Schema_PDF
     */
    private function _strokeGrid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draws relation arrows
     *
     * @return void
     *
     * @see Relation_Stats_Pdf::relationdraw()
     */
    private function _drawRelations()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draws tables
     *
     * @return void
     *
     * @see Table_Stats_Pdf::tableDraw()
     */
    private function _drawTables()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates data dictionary pages.
     *
     * @param array $alltables Tables to document.
     *
     * @return void
     */
    public function dataDictionaryDoc($alltables)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
