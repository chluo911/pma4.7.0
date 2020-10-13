<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Handles actions related to GIS GEOMETRYCOLLECTION objects
 *
 * @package PhpMyAdmin-GIS
 */

namespace PMA\libraries\gis;

use \TCPDF;

/**
 * Handles actions related to GIS GEOMETRYCOLLECTION objects
 *
 * @package PhpMyAdmin-GIS
 */
class GISGeometrycollection extends GISGeometry
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
     * @return GISGeometrycollection the singleton
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
     * @return array array containing the min, max values for x and y coordinates
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
     * @param string $spatial    GIS GEOMETRYCOLLECTION object
     * @param string $label      label for the GIS GEOMETRYCOLLECTION object
     * @param string $color      color for the GIS GEOMETRYCOLLECTION object
     * @param array  $scale_data array containing data related to scaling
     * @param object $image      image object
     *
     * @return resource the modified image object
     * @access public
     */
    public function prepareRowAsPng($spatial, $label, $color, $scale_data, $image)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds to the TCPDF instance, the data related to a row in the GIS dataset.
     *
     * @param string $spatial    GIS GEOMETRYCOLLECTION object
     * @param string $label      label for the GIS GEOMETRYCOLLECTION object
     * @param string $color      color for the GIS GEOMETRYCOLLECTION object
     * @param array  $scale_data array containing data related to scaling
     * @param TCPDF  $pdf        TCPDF instance
     *
     * @return TCPDF the modified TCPDF instance
     * @access public
     */
    public function prepareRowAsPdf($spatial, $label, $color, $scale_data, $pdf)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Prepares and returns the code related to a row in the GIS dataset as SVG.
     *
     * @param string $spatial    GIS GEOMETRYCOLLECTION object
     * @param string $label      label for the GIS GEOMETRYCOLLECTION object
     * @param string $color      color for the GIS GEOMETRYCOLLECTION object
     * @param array  $scale_data array containing data related to scaling
     *
     * @return string the code related to a row in the GIS dataset
     * @access public
     */
    public function prepareRowAsSvg($spatial, $label, $color, $scale_data)
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
     * @param string $spatial    GIS GEOMETRYCOLLECTION object
     * @param int    $srid       spatial reference ID
     * @param string $label      label for the GIS GEOMETRYCOLLECTION object
     * @param string $color      color for the GIS GEOMETRYCOLLECTION object
     * @param array  $scale_data array containing data related to scaling
     *
     * @return string JavaScript related to a row in the GIS dataset
     * @access public
     */
    public function prepareRowAsOl($spatial, $srid, $label, $color, $scale_data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Splits the GEOMETRYCOLLECTION object and get its constituents.
     *
     * @param string $geom_col geometry collection string
     *
     * @return array the constituents of the geometry collection object
     * @access private
     */
    private function _explodeGeomCol($geom_col)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

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
    public function generateWkt($gis_data, $index, $empty = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates parameters for the GIS data editor from the value of the GIS column.
     *
     * @param string $value of the GIS column
     *
     * @return array parameters for the GIS editor from the value of the GIS column
     * @access public
     */
    public function generateParams($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
