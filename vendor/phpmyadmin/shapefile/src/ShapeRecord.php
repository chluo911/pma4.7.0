<?php
/**
 * phpMyAdmin ShapeFile library
 * <https://github.com/phpmyadmin/shapefile/>.
 *
 * Copyright 2006-2007 Ovidio <ovidio AT users.sourceforge.net>
 * Copyright 2016 - 2017 Michal Čihař <michal@cihar.com>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, you can download one from
 * https://www.gnu.org/copyleft/gpl.html.
 */

namespace PhpMyAdmin\ShapeFile;

/**
 * ShapeFile record class.
 */
class ShapeRecord
{
    private $SHPFile = null;
    private $DBFFile = null;
    private $ShapeFile = null;

    private $size = 0;
    private $read = 0;

    public $recordNumber = null;
    public $shapeType = null;

    public $lastError = '';

    public $SHPData = array();
    public $DBFData = array();

    /**
     * @param int $shapeType
     */
    public function __construct($shapeType)
    {
        $this->shapeType = $shapeType;
    }

    /**
     * Loads record from files.
     *
     * @param ShapeFile $ShapeFile
     * @param file      &$SHPFile  Opened SHP file
     * @param file      &$DBFFile  Opened DBF file
     */
    public function loadFromFile(&$ShapeFile, &$SHPFile, &$DBFFile)
    {
        $this->ShapeFile = $ShapeFile;
        $this->SHPFile = $SHPFile;
        $this->DBFFile = $DBFFile;
        $this->_loadHeaders();

        /* No header read */
        if ($this->read == 0) {
            return;
        }

        switch ($this->shapeType) {
            case 0:
                $this->_loadNullRecord();
                break;
            case 1:
                $this->_loadPointRecord();
                break;
            case 21:
                $this->_loadPointMRecord();
                break;
            case 11:
                $this->_loadPointZRecord();
                break;
            case 3:
                $this->_loadPolyLineRecord();
                break;
            case 23:
                $this->_loadPolyLineMRecord();
                break;
            case 13:
                $this->_loadPolyLineZRecord();
                break;
            case 5:
                $this->_loadPolygonRecord();
                break;
            case 25:
                $this->_loadPolygonMRecord();
                break;
            case 15:
                $this->_loadPolygonZRecord();
                break;
            case 8:
                $this->_loadMultiPointRecord();
                break;
            case 28:
                $this->_loadMultiPointMRecord();
                break;
            case 18:
                $this->_loadMultiPointZRecord();
                break;
            default:
                $this->setError(sprintf('The Shape Type "%s" is not supported.', $this->shapeType));
                break;
        }

        /* We need to skip rest of the record */
        while ($this->read < $this->size) {
            $this->_loadData('V', 4);
        }

        /* Check if we didn't read too much */
        if ($this->read != $this->size) {
            $this->setError(sprintf('Failed to parse record, read=%d, size=%d', $this->read, $this->size));
        }

        if (ShapeFile::supports_dbase() && isset($this->DBFFile)) {
            $this->_loadDBFData();
        }
    }

    /**
     * Saves record to files.
     *
     * @param file &$SHPFile     Opened SHP file
     * @param file &$DBFFile     Opened DBF file
     * @param int  $recordNumber Record number
     */
    public function saveToFile(&$SHPFile, &$DBFFile, $recordNumber)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Updates DBF data to match header.
     *
     * @param array $header DBF structure header
     */
    public function updateDBFInfo($header)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Reads data.
     *
     * @param string $type  type for unpack()
     * @param int    $count number of bytes
     *
     * @return mixed
     */
    private function _loadData($type, $count)
    {
        $data = $this->ShapeFile->readSHP($count);
        if ($data === false) {
            return false;
        }
        $this->read += strlen($data);

        return Util::loadData($type, $data);
    }

    /**
     * Loads metadata header from a file.
     */
    private function _loadHeaders()
    {
        $this->shapeType = false;
        $this->recordNumber = $this->_loadData('N', 4);
        if ($this->recordNumber === false) {
            return;
        }
        // We read the length of the record
        $this->size = $this->_loadData('N', 4);
        if ($this->size === false) {
            return;
        }
        $this->size = $this->size * 2 + 8;
        $this->shapeType = $this->_loadData('V', 4);
    }

    /**
     * Saves metadata header to a file.
     */
    private function _saveHeaders()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _loadPoint()
    {
        $data = array();

        $data['x'] = $this->_loadData('d', 8);
        $data['y'] = $this->_loadData('d', 8);

        return $data;
    }

    private function _loadPointM()
    {
        $data = $this->_loadPoint();

        $data['m'] = $this->_loadData('d', 8);

        return $data;
    }

    private function _loadPointZ()
    {
        $data = $this->_loadPoint();

        $data['z'] = $this->_loadData('d', 8);
        $data['m'] = $this->_loadData('d', 8);

        return $data;
    }

    private function _savePoint($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _savePointM($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _savePointZ($data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _loadNullRecord()
    {
        $this->SHPData = array();
    }

    private function _loadPointRecord()
    {
        $this->SHPData = $this->_loadPoint();
    }

    private function _loadPointMRecord()
    {
        $this->SHPData = $this->_loadPointM();
    }

    private function _loadPointZRecord()
    {
        $this->SHPData = $this->_loadPointZ();
    }

    private function _savePointRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _savePointMRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _savePointZRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _loadBBox()
    {
        $this->SHPData['xmin'] = $this->_loadData('d', 8);
        $this->SHPData['ymin'] = $this->_loadData('d', 8);
        $this->SHPData['xmax'] = $this->_loadData('d', 8);
        $this->SHPData['ymax'] = $this->_loadData('d', 8);
    }

    private function _loadMultiPointRecord()
    {
        $this->SHPData = array();
        $this->_loadBBox();

        $this->SHPData['numpoints'] = $this->_loadData('V', 4);

        for ($i = 0; $i < $this->SHPData['numpoints']; ++$i) {
            $this->SHPData['points'][] = $this->_loadPoint();
        }
    }

    /**
     * @param string $type
     */
    private function _loadMultiPointMZRecord($type)
    {
        /* The m dimension is optional, depends on bounding box data */
        if ($type == 'm' && !$this->ShapeFile->hasMeasure()) {
            return;
        }

        $this->SHPData[$type . 'min'] = $this->_loadData('d', 8);
        $this->SHPData[$type . 'max'] = $this->_loadData('d', 8);

        for ($i = 0; $i < $this->SHPData['numpoints']; ++$i) {
            $this->SHPData['points'][$i][$type] = $this->_loadData('d', 8);
        }
    }

    private function _loadMultiPointMRecord()
    {
        $this->_loadMultiPointRecord();

        $this->_loadMultiPointMZRecord('m');
    }

    private function _loadMultiPointZRecord()
    {
        $this->_loadMultiPointRecord();

        $this->_loadMultiPointMZRecord('z');
        $this->_loadMultiPointMZRecord('m');
    }

    private function _saveMultiPointRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $type
     */
    private function _saveMultiPointMZRecord($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _saveMultiPointMRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _saveMultiPointZRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _loadPolyLineRecord()
    {
        $this->SHPData = array();
        $this->_loadBBox();

        $this->SHPData['numparts'] = $this->_loadData('V', 4);
        $this->SHPData['numpoints'] = $this->_loadData('V', 4);

        $numparts = $this->SHPData['numparts'];
        $numpoints = $this->SHPData['numpoints'];

        for ($i = 0; $i < $numparts; ++$i) {
            $this->SHPData['parts'][$i] = $this->_loadData('V', 4);
        }

        $part = 0;
        for ($i = 0; $i < $numpoints; ++$i) {
            if ($part + 1 < $numparts && $this->SHPData['parts'][$part + 1] == $i) {
                ++$part;
            }
            if (!isset($this->SHPData['parts'][$part]['points']) || !is_array($this->SHPData['parts'][$part]['points'])) {
                $this->SHPData['parts'][$part] = array('points' => array());
            }
            $this->SHPData['parts'][$part]['points'][] = $this->_loadPoint();
        }
    }

    /**
     * @param string $type
     */
    private function _loadPolyLineMZRecord($type)
    {
        /* The m dimension is optional, depends on bounding box data */
        if ($type == 'm' && !$this->ShapeFile->hasMeasure()) {
            return;
        }

        $this->SHPData[$type . 'min'] = $this->_loadData('d', 8);
        $this->SHPData[$type . 'max'] = $this->_loadData('d', 8);

        $numparts = $this->SHPData['numparts'];
        $numpoints = $this->SHPData['numpoints'];

        $part = 0;
        for ($i = 0; $i < $numpoints; ++$i) {
            if ($part + 1 < $numparts && $this->SHPData['parts'][$part + 1] == $i) {
                ++$part;
            }
            $this->SHPData['parts'][$part]['points'][$i][$type] = $this->_loadData('d', 8);
        }
    }

    private function _loadPolyLineMRecord()
    {
        $this->_loadPolyLineRecord();

        $this->_loadPolyLineMZRecord('m');
    }

    private function _loadPolyLineZRecord()
    {
        $this->_loadPolyLineRecord();

        $this->_loadPolyLineMZRecord('z');
        $this->_loadPolyLineMZRecord('m');
    }

    private function _savePolyLineRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param string $type
     */
    private function _savePolyLineMZRecord($type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _savePolyLineMRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _savePolyLineZRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _loadPolygonRecord()
    {
        $this->_loadPolyLineRecord();
    }

    private function _loadPolygonMRecord()
    {
        $this->_loadPolyLineMRecord();
    }

    private function _loadPolygonZRecord()
    {
        $this->_loadPolyLineZRecord();
    }

    private function _savePolygonRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _savePolygonMRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _savePolygonZRecord()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    private function _adjustBBox($point)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets dimension to 0 if not set.
     *
     * @param array  $point     Point to check
     * @param string $dimension Dimension to check
     *
     * @return array
     */
    private function _fixPoint($point, $dimension)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adjust point and bounding box when adding point.
     *
     * @param array $point Point data
     *
     * @return array Fixed point data
     */
    private function _adjustPoint($point)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds point to a record.
     *
     * @param array $point     Point data
     * @param int   $partIndex Part index
     */
    public function addPoint($point, $partIndex = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Deletes point from a record.
     *
     * @param int $pointIndex Point index
     * @param int $partIndex  Part index
     */
    public function deletePoint($pointIndex = 0, $partIndex = 0)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns length of content.
     *
     * @return int
     */
    public function getContentLength()
    {
        // The content length for a record is the length of the record contents section measured in 16-bit words.
        // one coordinate makes 4 16-bit words (64 bit double)
        switch ($this->shapeType) {
            case 0:
                $result = 0;
                break;
            case 1:
                $result = 10;
                break;
            case 21:
                $result = 10 + 4;
                break;
            case 11:
                $result = 10 + 8;
                break;
            case 3:
            case 5:
                $count = count($this->SHPData['parts']);
                $result = 22 + 2 * $count;
                for ($i = 0; $i < $count; ++$i) {
                    $result += 8 * count($this->SHPData['parts'][$i]['points']);
                }
                break;
            case 23:
            case 25:
                $count = count($this->SHPData['parts']);
                $result = 22 + (2 * 4) + 2 * $count;
                for ($i = 0; $i < $count; ++$i) {
                    $result += (8 + 4) * count($this->SHPData['parts'][$i]['points']);
                }
                break;
            case 13:
            case 15:
                $count = count($this->SHPData['parts']);
                $result = 22 + (4 * 4) + 2 * $count;
                for ($i = 0; $i < $count; ++$i) {
                    $result += (8 + 8) * count($this->SHPData['parts'][$i]['points']);
                }
                break;
            case 8:
                $result = 20 + 8 * count($this->SHPData['points']);
                break;
            case 28:
                $result = 20 + (2 * 4) + (8 + 4) * count($this->SHPData['points']);
                break;
            case 18:
                $result = 20 + (4 * 4) + (8 + 8) * count($this->SHPData['points']);
                break;
            default:
                $result = false;
                $this->setError(sprintf('The Shape Type "%s" is not supported.', $this->shapeType));
                break;
        }

        return $result;
    }

    private function _loadDBFData()
    {
        $this->DBFData = @dbase_get_record_with_names($this->DBFFile, $this->recordNumber);
        unset($this->DBFData['deleted']);
    }

    private function _saveDBFData()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets error message.
     *
     * @param string $error
     */
    public function setError($error)
    {
        $this->lastError = $error;
    }

    /**
     * Returns shape name.
     *
     * @return string
     */
    public function getShapeName()
    {
        return Util::nameShape($this->shapeType);
    }
}
