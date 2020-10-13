<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Handles actions related to GIS MULTIPOLYGON objects
 *
 * @package PhpMyAdmin-GIS
 */

namespace PMA\libraries\gis;

use \TCPDF;

/**
 * Handles actions related to GIS MULTIPOLYGON objects
 *
 * @package PhpMyAdmin-GIS
 */
class GISMultipolygon extends GISGeometry
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
     * @return GISMultipolygon the singleton
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
     * @param string $spatial    GIS MULTIPOLYGON object
     * @param string $label      Label for the GIS MULTIPOLYGON object
     * @param string $fill_color Color for the GIS MULTIPOLYGON object
     * @param array  $scale_data Array containing data related to scaling
     * @param object $image      Image object
     *
     * @return object the modified image object
     * @access public
     */
    public function prepareRowAsPng(
        $spatial,
        $label,
        $fill_color,
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
     * @param string $spatial    GIS MULTIPOLYGON object
     * @param string $label      Label for the GIS MULTIPOLYGON object
     * @param string $fill_color Color for the GIS MULTIPOLYGON object
     * @param array  $scale_data Array containing data related to scaling
     * @param TCPDF  $pdf        TCPDF instance
     *
     * @return TCPDF the modified TCPDF instance
     * @access public
     */
    public function prepareRowAsPdf($spatial, $label, $fill_color, $scale_data, $pdf)
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
     * @param string $spatial    GIS MULTIPOLYGON object
     * @param string $label      Label for the GIS MULTIPOLYGON object
     * @param string $fill_color Color for the GIS MULTIPOLYGON object
     * @param array  $scale_data Array containing data related to scaling
     *
     * @return string the code related to a row in the GIS dataset
     * @access public
     */
    public function prepareRowAsSvg($spatial, $label, $fill_color, $scale_data)
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
     * @param string $spatial    GIS MULTIPOLYGON object
     * @param int    $srid       Spatial reference ID
     * @param string $label      Label for the GIS MULTIPOLYGON object
     * @param string $fill_color Color for the GIS MULTIPOLYGON object
     * @param array  $scale_data Array containing data related to scaling
     *
     * @return string JavaScript related to a row in the GIS dataset
     * @access public
     */
    public function prepareRowAsOl($spatial, $srid, $label, $fill_color, $scale_data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draws a ring of the polygon using SVG path element.
     *
     * @param string $polygon    The ring
     * @param array  $scale_data Array containing data related to scaling
     *
     * @return string the code to draw the ring
     * @access private
     */
    private function _drawPath($polygon, $scale_data)
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
        // Determines whether each line ring is an inner ring or an outer ring.
        // If it's an inner ring get a point on the surface which can be used to
        // correctly classify inner rings to their respective outer rings.
        foreach ($row_data['parts'] as $i => $ring) {
            $row_data['parts'][$i]['isOuter']
                = GISPolygon::isOuterRing($ring['points']);
        }

        // Find points on surface for inner rings
        foreach ($row_data['parts'] as $i => $ring) {
            if (!$ring['isOuter']) {
                $row_data['parts'][$i]['pointOnSurface']
                    = GISPolygon::getPointOnSurface($ring['points']);
            }
        }

        // Classify inner rings to their respective outer rings.
        foreach ($row_data['parts'] as $j => $ring1) {
            if ($ring1['isOuter']) {
                continue;
            }
            foreach ($row_data['parts'] as $k => $ring2) {
                if (!$ring2['isOuter']) {
                    continue;
                }

                // If the pointOnSurface of the inner ring
                // is also inside the outer ring
                if (GISPolygon::isPointInsidePolygon(
                    $ring1['pointOnSurface'],
                    $ring2['points']
                )
                ) {
                    if (!isset($ring2['inner'])) {
                        $row_data['parts'][$k]['inner'] = array();
                    }
                    $row_data['parts'][$k]['inner'][] = $j;
                }
            }
        }

        $wkt = 'MULTIPOLYGON(';
        // for each polygon
        foreach ($row_data['parts'] as $ring) {
            if (!$ring['isOuter']) {
                continue;
            }

            $wkt .= '('; // start of polygon

            $wkt .= '('; // start of outer ring
            foreach ($ring['points'] as $point) {
                $wkt .= $point['x'] . ' ' . $point['y'] . ',';
            }
            $wkt
                = mb_substr(
                    $wkt,
                    0,
                    mb_strlen($wkt) - 1
                );
            $wkt .= ')'; // end of outer ring

            // inner rings if any
            if (isset($ring['inner'])) {
                foreach ($ring['inner'] as $j) {
                    $wkt .= ',('; // start of inner ring
                    foreach ($row_data['parts'][$j]['points'] as $innerPoint) {
                        $wkt .= $innerPoint['x'] . ' ' . $innerPoint['y'] . ',';
                    }
                    $wkt
                        = mb_substr(
                            $wkt,
                            0,
                            mb_strlen($wkt) - 1
                        );
                    $wkt .= ')';  // end of inner ring
                }
            }

            $wkt .= '),'; // end of polygon
        }
        $wkt
            = mb_substr(
                $wkt,
                0,
                mb_strlen($wkt) - 1
            );

        $wkt .= ')'; // end of multipolygon
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
