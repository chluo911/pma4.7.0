<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Handles visualization of GIS data
 *
 * @package PhpMyAdmin-GIS
 */

namespace PMA\libraries\gis;

use PMA\libraries\Util;
use \TCPDF;
use PMA\libraries\Sanitize;

require_once 'libraries/sql.lib.php';

/**
 * Handles visualization of GIS data
 *
 * @package PhpMyAdmin-GIS
 */
class GISVisualization
{
    /**
     * @var array   Raw data for the visualization
     */
    private $_data;
    private $_modified_sql;
    /**
     * @var array   Set of default settings values are here.
     */
    private $_settings = array(
        // Array of colors to be used for GIS visualizations.
        'colors' => array(
            '#B02EE0',
            '#E0642E',
            '#E0D62E',
            '#2E97E0',
            '#BCE02E',
            '#E02E75',
            '#5CE02E',
            '#E0B02E',
            '#0022E0',
            '#726CB1',
            '#481A36',
            '#BAC658',
            '#127224',
            '#825119',
            '#238C74',
            '#4C489B',
            '#87C9BF',
        ),
        // The width of the GIS visualization.
        'width'  => 600,
        // The height of the GIS visualization.
        'height' => 450,
    );
    /**
     * @var array   Options that the user has specified.
     */
    private $_userSpecifiedSettings = null;

    /**
     * Returns the settings array
     *
     * @return array the settings array
     * @access public
     */
    public function getSettings()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Factory
     *
     * @param string  $sql_query SQL to fetch raw data for visualization
     * @param array   $options   Users specified options
     * @param integer $row       number of rows
     * @param integer $pos       start position
     *
     * @return GISVisualization
     *
     * @access public
     */
    public static function get($sql_query, $options, $row, $pos)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get visualization
     *
     * @param array $data    Raw data, if set, parameters other than $options will be
     *                       ignored
     * @param array $options Users specified options
     *
     * @return GISVisualization
     */
    public static function getByData($data, $options)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if data has SRID
     *
     * @return bool
     */
    public function hasSrid()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Constructor. Stores user specified options.
     *
     * @param string  $sql_query SQL to fetch raw data for visualization
     * @param array   $options   Users specified options
     * @param integer $row       number of rows
     * @param integer $pos       start position
     * @param array   $data      raw data. If set, parameters other than $options
     *                           will be ignored
     *
     * @access public
     */
    private function __construct($sql_query, $options, $row, $pos, $data = null)
    {
        $this->_userSpecifiedSettings = $options;
        if (isset($data)) {
            $this->_data = $data;
        } else {
            $this->_modified_sql = $this->_modifySqlQuery($sql_query, $row, $pos);
            $this->_data = $this->_fetchRawData();
        }
    }

    /**
     * All the variable initialization, options handling has to be done here.
     *
     * @return void
     * @access protected
     */
    protected function init()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns sql for fetching raw data
     *
     * @param string  $sql_query The SQL to modify.
     * @param integer $rows      Number of rows.
     * @param integer $pos       Start position.
     *
     * @return string the modified sql query.
     */
    private function _modifySqlQuery($sql_query, $rows, $pos)
    {
        $modified_query = 'SELECT ';
        // If label column is chosen add it to the query
        if (!empty($this->_userSpecifiedSettings['labelColumn'])) {
            $modified_query .= Util::backquote(
                $this->_userSpecifiedSettings['labelColumn']
            )
            . ', ';
        }
        // Wrap the spatial column with 'ASTEXT()' function and add it
        $modified_query .= 'ASTEXT('
            . Util::backquote($this->_userSpecifiedSettings['spatialColumn'])
            . ') AS ' . Util::backquote(
                $this->_userSpecifiedSettings['spatialColumn']
            )
            . ', ';

        // Get the SRID
        $modified_query .= 'SRID('
            . Util::backquote($this->_userSpecifiedSettings['spatialColumn'])
            . ') AS ' . Util::backquote('srid') . ' ';

        // Append the original query as the inner query
        $modified_query .= 'FROM (' . $sql_query . ') AS '
            . Util::backquote('temp_gis');

        // LIMIT clause
        if (is_numeric($rows) && $rows > 0) {
            $modified_query .= ' LIMIT ';
            if (is_numeric($pos) && $pos >= 0) {
                $modified_query .= $pos . ', ' . $rows;
            } else {
                $modified_query .= $rows;
            }
        }

        return $modified_query;
    }

    /**
     * Returns raw data for GIS visualization.
     *
     * @return string the raw data.
     */
    private function _fetchRawData()
    {
        $modified_result = $GLOBALS['dbi']->tryQuery($this->_modified_sql);

        if ($modified_result === false) {
            return array();
        }

        $data = array();
        while ($row = $GLOBALS['dbi']->fetchAssoc($modified_result)) {
            $data[] = $row;
        }

        return $data;
    }

    /**
     * A function which handles passed parameters. Useful if desired
     * chart needs to be a little bit different from the default one.
     *
     * @return void
     * @access private
     */
    private function _handleOptions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sanitizes the file name.
     *
     * @param string $file_name file name
     * @param string $ext       extension of the file
     *
     * @return string the sanitized file name
     * @access private
     */
    private function _sanitizeName($file_name, $ext)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Handles common tasks of writing the visualization to file for various formats.
     *
     * @param string $file_name file name
     * @param string $type      mime type
     * @param string $ext       extension of the file
     *
     * @return void
     * @access private
     */
    private function _toFile($file_name, $type, $ext)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generate the visualization in SVG format.
     *
     * @return string the generated image resource
     * @access private
     */
    private function _svg()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the visualization as a SVG.
     *
     * @return string the visualization as a SVG
     * @access public
     */
    public function asSVG()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Saves as a SVG image to a file.
     *
     * @param string $file_name File name
     *
     * @return void
     * @access public
     */
    public function toFileAsSvg($file_name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generate the visualization in PNG format.
     *
     * @return resource the generated image resource
     * @access private
     */
    private function _png()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the visualization as a PNG.
     *
     * @return string the visualization as a PNG
     * @access public
     */
    public function asPng()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Saves as a PNG image to a file.
     *
     * @param string $file_name File name
     *
     * @return void
     * @access public
     */
    public function toFileAsPng($file_name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the code for visualization with OpenLayers.
     *
     * @todo Should return JSON to avoid eval() in gis_data_editor.js
     *
     * @return string the code for visualization with OpenLayers
     * @access public
     */
    public function asOl()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Saves as a PDF to a file.
     *
     * @param string $file_name File name
     *
     * @return void
     * @access public
     */
    public function toFileAsPdf($file_name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convert file to image
     *
     * @param string $format Output format
     *
     * @return string File
     */
    public function toImage($format)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Convert file to given format
     *
     * @param string $filename Filename
     * @param string $format   Output format
     *
     * @return void
     */
    public function toFile($filename, $format)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Calculates the scale, horizontal and vertical offset that should be used.
     *
     * @param array $data Row data
     *
     * @return array an array containing the scale, x and y offsets
     * @access private
     */
    private function _scaleDataSet($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Prepares and return the dataset as needed by the visualization.
     *
     * @param array  $data       Raw data
     * @param array  $scale_data Data related to scaling
     * @param string $format     Format of the visualization
     * @param object $results    Image object in the case of png
     *                           TCPDF object in the case of pdf
     *
     * @return mixed the formatted array of data
     * @access private
     */
    private function _prepareDataSet($data, $scale_data, $format, $results)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Set user specified settings
     *
     * @param array $userSpecifiedSettings User specified settings
     *
     * @return void
     */
    public function setUserSpecifiedSettings($userSpecifiedSettings)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
