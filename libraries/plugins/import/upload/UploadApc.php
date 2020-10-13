<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Provides upload functionalities for the import plugins
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\import\upload;

use PMA\libraries\plugins\UploadInterface;

/**
 * Implementation for the APC extension
 *
 * @package PhpMyAdmin
 */
class UploadApc implements UploadInterface
{
    /**
     * Gets the specific upload ID Key
     *
     * @return string ID Key
     */
    public static function getIdKey()
    {
        return 'APC_UPLOAD_PROGRESS';
    }

    /**
     * Returns upload status.
     *
     * This is implementation for APC extension.
     *
     * @param string $id upload id
     *
     * @return array|null
     */
    public static function getUploadStatus($id)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
