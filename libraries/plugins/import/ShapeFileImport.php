<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * This class extends ShapeFile class to cater the following phpMyAdmin
 * specific requirements.
 *
 * @package    PhpMyAdmin-Import
 * @subpackage ESRI_Shape
 */
namespace PMA\libraries\plugins\import;

use PhpMyAdmin\ShapeFile\ShapeFile;

class ShapeFileImport extends ShapeFile
{
    /**
     * Reads given number of bytes from SHP file
     *
     * @return string|false
     */
    public function readSHP($bytes)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Checks whether file is at EOF
     *
     * @return bool
     */
    public function eofSHP()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
