<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Handles actions related to GIS MULTILINESTRING objects
 *
 * @package PhpMyAdmin-GIS
 */

namespace PMA\libraries\gis;

use \TCPDF;

/**
 * Handles actions related to GIS MULTILINESTRING objects
 *
 * @package PhpMyAdmin-GIS
 */
class GISMultilinestring extends GISGeometry
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
     * @return GISMultilinestring the singleton
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
     * @param string $spatial    GIS MULTILINESTRING object
     * @param string $label      Label for the GIS MULTILINESTRING object
     * @param string $line_color Color for the GIS MULTILINESTRING object
     * @param array  $scale_data Array containing data related to scaling
     * @param object $image      Image object
     *
     * @return object the modified image object
     * @access public
     */
    public function prepareRowAsPng(
        $spatial,
        $label,
        $line_color,
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
     * @param string $spatial    GIS MULTILINESTRING object
     * @param string $label      Label for the GIS MULTILINESTRING object
     * @param string $line_color Color for the GIS MULTILINESTRING object
     * @param array  $scale_data Array containing data related to scaling
     * @param TCPDF  $pdf        TCPDF instance
     *
     * @return TCPDF the modified TCPDF instance
     * @access public
     */
    public function prepareRowAsPdf($spatial, $label, $line_color, $scale_data, $pdf)
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
     * @param string $spatial    GIS MULTILINESTRING object
     * @param string $label      Label for the GIS MULTILINESTRING object
     * @param string $line_color Color for the GIS MULTILINESTRING object
     * @param array  $scale_data Array containing data related to scaling
     *
     * @return string the code related to a row in the GIS dataset
     * @access public
     */
    public function prepareRowAsSvg($spatial, $label, $line_color, $scale_data)
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
     * @param string $spatial    GIS MULTILINESTRING object
     * @param int    $srid       Spatial reference ID
     * @param string $label      Label for the GIS MULTILINESTRING object
     * @param string $line_color Color for the GIS MULTILINESTRING object
     * @param array  $scale_data Array containing data related to scaling
     *
     * @return string JavaScript related to a row in the GIS dataset
     * @access public
     */
    public function prepareRowAsOl($spatial, $srid, $label, $line_color, $scale_data)
    {
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
     * @param string $empty    Value for empty points
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
        $wkt = 'MULTILINESTRING(';
        for ($i = 0; $i < $row_data['numparts']; $i++) {
            $wkt .= '(';
            foreach ($row_data['parts'][$i]['points'] as $point) {
                $wkt .= $point['x'] . ' ' . $point['y'] . ',';
            }
            $wkt
                = mb_substr(
                    $wkt,
                    0,
                    mb_strlen($wkt) - 1
                );
            $wkt .= '),';
        }
        $wkt
            = mb_substr(
                $wkt,
                0,
                mb_strlen($wkt) - 1
            );
        $wkt .= ')';

        return $wkt;
    }

    /**
     * Generate parameters for the GIS data editor from the value of the GIS column.
     *
     * @param string $value Value of the GIS column
     * @param int    $index Index of the geometry
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
