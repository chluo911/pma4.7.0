<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Base class for all GIS data type classes
 *
 * @package PhpMyAdmin-GIS
 */

namespace PMA\libraries\gis;

use \TCPDF;

/**
 * Base class for all GIS data type classes.
 *
 * @package PhpMyAdmin-GIS
 */
abstract class GISGeometry
{
    /**
     * Prepares and returns the code related to a row in the GIS dataset as SVG.
     *
     * @param string $spatial    GIS data object
     * @param string $label      label for the GIS data object
     * @param string $color      color for the GIS data object
     * @param array  $scale_data data related to scaling
     *
     * @return string the code related to a row in the GIS dataset
     * @access public
     */
    abstract public function prepareRowAsSvg($spatial, $label, $color, $scale_data);

    /**
     * Adds to the PNG image object, the data related to a row in the GIS dataset.
     *
     * @param string $spatial    GIS data object
     * @param string $label      label for the GIS data object
     * @param string $color      color for the GIS data object
     * @param array  $scale_data array containing data related to scaling
     * @param object $image      image object
     *
     * @return object the modified image object
     * @access public
     */
    abstract public function prepareRowAsPng(
        $spatial,
        $label,
        $color,
        $scale_data,
        $image
    );

    /**
     * Adds to the TCPDF instance, the data related to a row in the GIS dataset.
     *
     * @param string $spatial    GIS data object
     * @param string $label      label for the GIS data object
     * @param string $color      color for the GIS data object
     * @param array  $scale_data array containing data related to scaling
     * @param TCPDF  $pdf        TCPDF instance
     *
     * @return TCPDF the modified TCPDF instance
     * @access public
     */
    abstract public function prepareRowAsPdf(
        $spatial,
        $label,
        $color,
        $scale_data,
        $pdf
    );

    /**
     * Prepares the JavaScript related to a row in the GIS dataset
     * to visualize it with OpenLayers.
     *
     * @param string $spatial    GIS data object
     * @param int    $srid       spatial reference ID
     * @param string $label      label for the GIS data object
     * @param string $color      color for the GIS data object
     * @param array  $scale_data array containing data related to scaling
     *
     * @return string the JavaScript related to a row in the GIS dataset
     * @access public
     */
    abstract public function prepareRowAsOl(
        $spatial,
        $srid,
        $label,
        $color,
        $scale_data
    );

    /**
     * Scales each row.
     *
     * @param string $spatial spatial data of a row
     *
     * @return array array containing the min, max values for x and y coordinates
     * @access public
     */
    abstract public function scaleRow($spatial);

    /**
     * Generates the WKT with the set of parameters passed by the GIS editor.
     *
     * @param array  $gis_data GIS data
     * @param int    $index    index into the parameter object
     * @param string $empty    value for empty points
     *
     * @return string WKT with the set of parameters passed by the GIS editor
     * @access public
     */
    abstract public function generateWkt($gis_data, $index, $empty = '');

    /**
     * Returns OpenLayers.Bounds object that correspond to the bounds of GIS data.
     *
     * @param string $srid       spatial reference ID
     * @param array  $scale_data data related to scaling
     *
     * @return string OpenLayers.Bounds object that
     *                correspond to the bounds of GIS data
     * @access protected
     */
    protected function getBoundsForOl($srid, $scale_data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Updates the min, max values with the given point set.
     *
     * @param string $point_set point set
     * @param array  $min_max   existing min, max values
     *
     * @return array the updated min, max values
     * @access protected
     */
    protected function setMinMax($point_set, $min_max)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates parameters for the GIS data editor from the value of the GIS column.
     * This method performs common work.
     * More specific work is performed by each of the geom classes.
     *
     * @param string $value value of the GIS column
     *
     * @return array parameters for the GIS editor from the value of the GIS column
     * @access protected
     */
    protected function generateParams($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Extracts points, scales and returns them as an array.
     *
     * @param string  $point_set  string of comma separated points
     * @param array   $scale_data data related to scaling
     * @param boolean $linear     if true, as a 1D array, else as a 2D array
     *
     * @return array scaled points
     * @access protected
     */
    protected function extractPoints($point_set, $scale_data, $linear = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates JavaScript for adding an array of polygons to OpenLayers.
     *
     * @param array  $polygons x and y coordinates for each polygon
     * @param string $srid     spatial reference id
     *
     * @return string JavaScript for adding an array of polygons to OpenLayers
     * @access protected
     */
    protected function getPolygonArrayForOpenLayers($polygons, $srid)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates JavaScript for adding points for OpenLayers polygon.
     *
     * @param array  $polygon x and y coordinates for each line
     * @param string $srid    spatial reference id
     *
     * @return string JavaScript for adding points for OpenLayers polygon
     * @access protected
     */
    protected function getPolygonForOpenLayers($polygon, $srid)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates JavaScript for adding an array of LineString
     * or LineRing to OpenLayers.
     *
     * @param array  $lines          x and y coordinates for each line
     * @param string $srid           spatial reference id
     * @param bool   $is_line_string whether it's an array of LineString
     *
     * @return string JavaScript for adding an array of LineString
     *                or LineRing to OpenLayers
     * @access protected
     */
    protected function getLineArrayForOpenLayers(
        $lines,
        $srid,
        $is_line_string = true
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates JavaScript for adding a LineString or LineRing to OpenLayers.
     *
     * @param array  $points_arr     x and y coordinates for each point
     * @param string $srid           spatial reference id
     * @param bool   $is_line_string whether it's a LineString
     *
     * @return string JavaScript for adding a LineString or LineRing to OpenLayers
     * @access protected
     */
    protected function getLineForOpenLayers(
        $points_arr,
        $srid,
        $is_line_string = true
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates JavaScript for adding an array of points to OpenLayers.
     *
     * @param array  $points_arr x and y coordinates for each point
     * @param string $srid       spatial reference id
     *
     * @return string JavaScript for adding an array of points to OpenLayers
     * @access protected
     */
    protected function getPointsArrayForOpenLayers($points_arr, $srid)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates JavaScript for adding a point to OpenLayers.
     *
     * @param array  $point array containing the x and y coordinates of the point
     * @param string $srid  spatial reference id
     *
     * @return string JavaScript for adding points to OpenLayers
     * @access protected
     */
    protected function getPointForOpenLayers($point, $srid)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
