<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Handles actions related to GIS POINT objects
 *
 * @package PhpMyAdmin-GIS
 */

namespace PMA\libraries\gis;

use \TCPDF;

/**
 * Handles actions related to GIS POINT objects
 *
 * @package PhpMyAdmin-GIS
 */
class GISPoint extends GISGeometry
{
    // Hold the singleton instance of the class
    private static $_instance;

    /**
     * A private constructor; prevents direct creation of object.
     *
     * @access private
     */
    private function __construct()
    {
    }

    /**
     * Returns the singleton.
     *
     * @return GISPoint the singleton
     * @access public
     */
    public static function singleton()
    {
        if (!isset(self::$_instance)) {
            $class = __CLASS__;
            self::$_instance = new $class;
        }

        return self::$_instance;
    }

    /**
     * Scales each row.
     *
     * @param string $spatial spatial data of a row
     *
     * @return array an array containing the min, max values for x and y coordinates
     * @access public
     */
    public function scaleRow($spatial)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds to the PNG image object, the data related to a row in the GIS dataset.
     *
     * @param string   $spatial     GIS POINT object
     * @param string   $label       Label for the GIS POINT object
     * @param string   $point_color Color for the GIS POINT object
     * @param array    $scale_data  Array containing data related to scaling
     * @param resource $image       Image object
     *
     * @return resource the modified image object
     * @access public
     */
    public function prepareRowAsPng(
        $spatial,
        $label,
        $point_color,
        $scale_data,
        $image
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds to the TCPDF instance, the data related to a row in the GIS dataset.
     *
     * @param string $spatial     GIS POINT object
     * @param string $label       Label for the GIS POINT object
     * @param string $point_color Color for the GIS POINT object
     * @param array  $scale_data  Array containing data related to scaling
     * @param TCPDF  $pdf         TCPDF instance
     *
     * @return TCPDF the modified TCPDF instance
     * @access public
     */
    public function prepareRowAsPdf(
        $spatial,
        $label,
        $point_color,
        $scale_data,
        $pdf
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Prepares and returns the code related to a row in the GIS dataset as SVG.
     *
     * @param string $spatial     GIS POINT object
     * @param string $label       Label for the GIS POINT object
     * @param string $point_color Color for the GIS POINT object
     * @param array  $scale_data  Array containing data related to scaling
     *
     * @return string the code related to a row in the GIS dataset
     * @access public
     */
    public function prepareRowAsSvg($spatial, $label, $point_color, $scale_data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Prepares JavaScript related to a row in the GIS dataset
     * to visualize it with OpenLayers.
     *
     * @param string $spatial     GIS POINT object
     * @param int    $srid        Spatial reference ID
     * @param string $label       Label for the GIS POINT object
     * @param string $point_color Color for the GIS POINT object
     * @param array  $scale_data  Array containing data related to scaling
     *
     * @return string JavaScript related to a row in the GIS dataset
     * @access public
     */
    public function prepareRowAsOl(
        $spatial,
        $srid,
        $label,
        $point_color,
        $scale_data
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generate the WKT with the set of parameters passed by the GIS editor.
     *
     * @param array  $gis_data GIS data
     * @param int    $index    Index into the parameter object
     * @param string $empty    Point does not adhere to this parameter
     *
     * @return string WKT with the set of parameters passed by the GIS editor
     * @access public
     */
    public function generateWkt($gis_data, $index, $empty = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generate the WKT for the data from ESRI shape files.
     *
     * @param array $row_data GIS data
     *
     * @return string the WKT for the data from ESRI shape files
     * @access public
     */
    public function getShape($row_data)
    {
        return 'POINT(' . (isset($row_data['x']) ? $row_data['x'] : '')
        . ' ' . (isset($row_data['y']) ? $row_data['y'] : '') . ')';
    }

    /**
     * Generate parameters for the GIS data editor from the value of the GIS column.
     *
     * @param string $value of the GIS column
     * @param int    $index of the geometry
     *
     * @return array params for the GIS data editor from the value of the GIS column
     * @access public
     */
    public function generateParams($value, $index = -1)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
