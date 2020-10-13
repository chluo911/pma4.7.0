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
 * ShapeFile class.
 */
class ShapeFile
{
    const MAGIC = 0x270a;

    public $FileName;

    private $SHPFile = null;
    private $SHXFile = null;
    private $DBFFile = null;

    private $DBFHeader;

    public $lastError = '';

    public $boundingBox = array('xmin' => 0.0, 'ymin' => 0.0, 'xmax' => 0.0, 'ymax' => 0.0);
    private $fileLength = 0;
    public $shapeType = 0;

    public $records = array();

    /**
     * Checks whether dbase manipuations are supported.
     *
     * @return bool
     */
    public static function supports_dbase()
    {
        return extension_loaded('dbase');
    }

    /**
     * @param int $shapeType
     */
    public function __construct($shapeType, $boundingBox = array('xmin' => 0.0, 'ymin' => 0.0, 'xmax' => 0.0, 'ymax' => 0.0), $FileName = null)
    {
        $this->shapeType = $shapeType;
        $this->boundingBox = $boundingBox;
        $this->FileName = $FileName;
        $this->fileLength = 50; // The value for file length is the total length of the file in 16-bit words (including the fifty 16-bit words that make up the header).
    }

    /**
     * Loads shapefile and dbase (if supported).
     *
     * @param string $FileName File mask to load (eg. example.*)
     */
    public function loadFromFile($FileName)
    {
        if (!empty($FileName)) {
            $this->FileName = $FileName;
            $result = $this->_openSHPFile();
        } else {
            /* We operate on buffer emulated by readSHP / eofSHP */
            $result = true;
        }

        if ($result && ($this->_openDBFFile())) {
            if (!$this->_loadHeaders()) {
                $this->_closeSHPFile();
                $this->_closeDBFFile();

                return false;
            }
            if (!$this->_loadRecords()) {
                $this->_closeSHPFile();
                $this->_closeDBFFile();

                return false;
            }
            $this->_closeSHPFile();
            $this->_closeDBFFile();

            return true;
        } else {
            return false;
        }
    }

    /**
     * Saves shapefile.
     *
     * @param string|null $FileName Name of file, otherwise existing is used
     */
    public function saveToFile($FileName = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generates filename with given extension.
     *
     * @param string $extension Extension to use (including dot)
     *
     * @return string
     */
    private function _getFilename($extension)
    {
        return str_replace('.*', $extension, $this->FileName);
    }

    /**
     * Updates bounding box based on SHPData.
     *
     * @param string $type Type of box
     * @param array  $data ShapeRecord SHPData
     */
    private function updateBBox($type, $data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Adds record to shape file.
     *
     * @param ShapeRecord $record
     *
     * @return int Number of added record
     */
    public function addRecord($record)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Deletes record from shapefile.
     *
     * @param int $index
     */
    public function deleteRecord($index)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns array defining fields in DBF file.
     *
     * @return array see setDBFHeader for more information
     */
    public function getDBFHeader()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Changes array defining fields in DBF file, used in dbase_create call.
     *
     * @param array $header An array of arrays, each array describing the
     *                      format of one field of the database. Each
     *                      field consists of a name, a character indicating
     *                      the field type, and optionally, a length,
     *                      a precision and a nullable flag.
     */
    public function setDBFHeader($header)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Lookups value in the DBF file and returs index.
     *
     * @param string $field Field to match
     * @param mixed  $value Value to match
     *
     * @return int
     */
    public function getIndexFromDBFData($field, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Loads DBF metadata.
     */
    private function _loadDBFHeader()
    {
        $DBFFile = fopen($this->_getFilename('.dbf'), 'r');

        $result = array();
        $i = 1;
        $inHeader = true;

        while ($inHeader) {
            if (!feof($DBFFile)) {
                $buff32 = fread($DBFFile, 32);
                if ($i > 1) {
                    if (substr($buff32, 0, 1) == chr(13)) {
                        $inHeader = false;
                    } else {
                        $pos = strpos(substr($buff32, 0, 10), chr(0));
                        $pos = ($pos == 0 ? 10 : $pos);

                        $fieldName = substr($buff32, 0, $pos);
                        $fieldType = substr($buff32, 11, 1);
                        $fieldLen = ord(substr($buff32, 16, 1));
                        $fieldDec = ord(substr($buff32, 17, 1));

                        array_push($result, array($fieldName, $fieldType, $fieldLen, $fieldDec));
                    }
                }
                ++$i;
            } else {
                $inHeader = false;
            }
        }

        fclose($DBFFile);

        return $result;
    }

    /**
     * Deletes record from the DBF file.
     *
     * @param int $index
     */
    private function _deleteRecordFromDBF($index)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Loads SHP file metadata.
     *
     * @return bool
     */
    private function _loadHeaders()
    {
        if (Util::loadData('N', $this->readSHP(4)) != self::MAGIC) {
            $this->setError('Not a SHP file (file code mismatch)');

            return false;
        }

        /* Skip 20 unused bytes */
        $this->readSHP(20);

        $this->fileLength = Util::loadData('N', $this->readSHP(4));

        /* We currently ignore version */
        $this->readSHP(4);

        $this->shapeType = Util::loadData('V', $this->readSHP(4));

        $this->boundingBox = array();
        $this->boundingBox['xmin'] = Util::loadData('d', $this->readSHP(8));
        $this->boundingBox['ymin'] = Util::loadData('d', $this->readSHP(8));
        $this->boundingBox['xmax'] = Util::loadData('d', $this->readSHP(8));
        $this->boundingBox['ymax'] = Util::loadData('d', $this->readSHP(8));
        $this->boundingBox['zmin'] = Util::loadData('d', $this->readSHP(8));
        $this->boundingBox['zmax'] = Util::loadData('d', $this->readSHP(8));
        $this->boundingBox['mmin'] = Util::loadData('d', $this->readSHP(8));
        $this->boundingBox['mmax'] = Util::loadData('d', $this->readSHP(8));

        if (self::supports_dbase()) {
            $this->DBFHeader = $this->_loadDBFHeader();
        }

        return true;
    }

    /**
     * Saves bounding box record, possibly using 0 instead of not set values.
     *
     * @param file   $file File object
     * @param string $type Bounding box dimension (eg. xmax, mmin...)
     */
    private function _saveBBoxRecord($file, $type)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Saves bounding box to a file.
     *
     * @param file $file File object
     */
    private function _saveBBox($file)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Saves SHP and SHX file metadata.
     */
    private function _saveHeaders()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Loads records from SHP file (and DBF).
     *
     * @return bool
     */
    private function _loadRecords()
    {
        /* Need to start at offset 100 */
        while (!$this->eofSHP()) {
            $record = new ShapeRecord(-1);
            $record->loadFromFile($this, $this->SHPFile, $this->DBFFile);
            if ($record->lastError != '') {
                $this->setError($record->lastError);

                return false;
            }
            if (($record->shapeType === false || $record->shapeType === '') && $this->eofSHP()) {
                break;
            }

            $this->records[] = $record;
        }

        return true;
    }

    /**
     * Saves records to SHP and SHX files.
     */
    private function _saveRecords()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Generic interface to open files.
     *
     * @param bool   $toWrite   Whether file should be opened for writing
     * @param string $extension File extension
     * @param string $name      Verbose file name to report errors
     *
     * @return file|false File handle
     */
    private function _openFile($toWrite, $extension, $name)
    {
        $shp_name = $this->_getFilename($extension);
        $result = @fopen($shp_name, ($toWrite ? 'wb+' : 'rb'));
        if (!$result) {
            $this->setError(sprintf('It wasn\'t possible to open the %s file "%s"', $name, $shp_name));

            return false;
        }

        return $result;
    }

    /**
     * Opens SHP file.
     *
     * @param bool $toWrite Whether file should be opened for writing
     *
     * @return bool
     */
    private function _openSHPFile($toWrite = false)
    {
        $this->SHPFile = $this->_openFile($toWrite, '.shp', 'Shape');
        if (!$this->SHPFile) {
            return false;
        }

        return true;
    }

    /**
     * Closes SHP file.
     */
    private function _closeSHPFile()
    {
        if ($this->SHPFile) {
            fclose($this->SHPFile);
            $this->SHPFile = null;
        }
    }

    /**
     * Opens SHX file.
     *
     * @param bool $toWrite Whether file should be opened for writing
     *
     * @return bool
     */
    private function _openSHXFile($toWrite = false)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Closes SHX file.
     */
    private function _closeSHXFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates DBF file.
     *
     * @return bool
     */
    private function _createDBFFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Loads DBF file if supported.
     *
     * @return bool
     */
    private function _openDBFFile()
    {
        if (!self::supports_dbase()) {
            $this->DBFFile = null;

            return true;
        }
        $dbf_name = $this->_getFilename('.dbf');
        if (is_readable($dbf_name)) {
            $this->DBFFile = @dbase_open($dbf_name, 0);
            if (!$this->DBFFile) {
                $this->setError(sprintf('It wasn\'t possible to open the DBase file "%s"', $dbf_name));

                return false;
            }
        } else {
            $this->setError(sprintf('It wasn\'t possible to find the DBase file "%s"', $dbf_name));

            return false;
        }

        return true;
    }

    /**
     * Closes DBF file.
     */
    private function _closeDBFFile()
    {
        if ($this->DBFFile) {
            dbase_close($this->DBFFile);
            $this->DBFFile = null;
        }
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
     * Reads given number of bytes from SHP file.
     *
     * @param int $bytes
     *
     * @return string
     */
    public function readSHP($bytes)
    {
        return fread($this->SHPFile, $bytes);
    }

    /**
     * Checks whether file is at EOF.
     *
     * @return bool
     */
    public function eofSHP()
    {
        return feof($this->SHPFile);
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

    /**
     * Check whether file contains measure data.
     *
     * For some reason this is distinguished by zero bouding box in the
     * specification.
     *
     * @return bool
     */
    public function hasMeasure()
    {
        return $this->boundingBox['mmin'] != 0 || $this->boundingBox['mmax'] != 0;
    }
}
