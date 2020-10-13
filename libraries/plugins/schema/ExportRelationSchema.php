<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Contains PMA\libraries\plugins\schema\ExportRelationSchema class which is
 * inherited by all schema classes.
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema;

use PMA;
use PMA\libraries\URL;

/**
 * This class is inherited by all schema classes
 * It contains those methods which are common in them
 * it works like factory pattern
 *
 * @package PhpMyAdmin
 */
class ExportRelationSchema
{
    /**
     * Constructor.
     *
     * @param string $db      database name
     * @param object $diagram schema diagram
     */
    public function __construct($db, $diagram)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    protected $db;
    protected $diagram;
    protected $showColor;
    protected $tableDimension;
    protected $sameWide;
    protected $showKeys;
    protected $orientation;
    protected $paper;
    protected $pageNumber;
    protected $offline;

    /**
     * Set Page Number
     *
     * @param integer $value Page Number of the document to be created
     *
     * @return void
     */
    public function setPageNumber($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the schema page number
     *
     * @return integer schema page number
     */
    public function getPageNumber()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets showColor
     *
     * @param boolean $value whether to show colors
     *
     * @return void
     */
    public function setShowColor($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns whether to show colors
     *
     * @return boolean whether to show colors
     */
    public function isShowColor()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set Table Dimension
     *
     * @param boolean $value show table co-ordinates or not
     *
     * @return void
     */
    public function setTableDimension($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns whether to show table dimensions
     *
     * @return boolean whether to show table dimensions
     */
    public function isTableDimension()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set same width of All Tables
     *
     * @param boolean $value set same width of all tables or not
     *
     * @return void
     */
    public function setAllTablesSameWidth($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns whether to use same width for all tables or not
     *
     * @return boolean whether to use same width for all tables or not
     */
    public function isAllTableSameWidth()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set Show only keys
     *
     * @param boolean $value show only keys or not
     *
     * @return void
     *
     * @access public
     */
    public function setShowKeys($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns whether to show keys
     *
     * @return boolean whether to show keys
     */
    public function isShowKeys()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set Orientation
     *
     * @param string $value Orientation will be portrait or landscape
     *
     * @return void
     *
     * @access public
     */
    public function setOrientation($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns orientation
     *
     * @return string orientation
     */
    public function getOrientation()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set type of paper
     *
     * @param string $value paper type can be A4 etc
     *
     * @return void
     *
     * @access public
     */
    public function setPaper($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the paper size
     *
     * @return string paper size
     */
    public function getPaper()
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
     * @param boolean $value offline or not
     *
     * @return void
     *
     * @access public
     */
    public function setOffline($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns whether the client side database is used
     *
     * @return boolean
     *
     * @access public
     */
    public function isOffline()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the table names from the request
     *
     * @return array an array of table names
     */
    protected function getTablesFromRequest()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the file name
     *
     * @param String $extension file extension
     *
     * @return string file name
     */
    protected function getFileName($extension)
    {
        $filename = $this->db . $extension;
        // Get the name of this page to use as filename
        if ($this->pageNumber != -1 && !$this->offline) {
            $_name_sql = 'SELECT page_descr FROM '
                . PMA\libraries\Util::backquote($GLOBALS['cfgRelation']['db']) . '.'
                . PMA\libraries\Util::backquote($GLOBALS['cfgRelation']['pdf_pages'])
                . ' WHERE page_nr = ' . $this->pageNumber;
            $_name_rs = PMA_queryAsControlUser($_name_sql);
            $_name_row = $GLOBALS['dbi']->fetchRow($_name_rs);
            $filename = $_name_row[0] . $extension;
        }

        return $filename;
    }

    /**
     * Displays an error message
     *
     * @param integer $pageNumber    ID of the chosen page
     * @param string  $type          Schema Type
     * @param string  $error_message The error message
     *
     * @access public
     *
     * @return void
     */
    public static function dieSchema($pageNumber, $type = '', $error_message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
