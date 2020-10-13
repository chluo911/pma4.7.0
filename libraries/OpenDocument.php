<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Simple interface for creating OASIS OpenDocument files.
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries;

use PMA\libraries\ZipFile;

/**
 * Simplfied OpenDocument creator class
 *
 * @package PhpMyAdmin
 */
class OpenDocument
{
    const NS = <<<EOT
xmlns:office="urn:oasis:names:tc:opendocument:xmlns:office:1.0"
xmlns:text="urn:oasis:names:tc:opendocument:xmlns:text:1.0"
xmlns:table="urn:oasis:names:tc:opendocument:xmlns:table:1.0"
xmlns:style="urn:oasis:names:tc:opendocument:xmlns:style:1.0"
xmlns:number="urn:oasis:names:tc:opendocument:xmlns:datastyle:1.0"
xmlns:fo="urn:oasis:names:tc:opendocument:xmlns:xsl-fo-compatible:1.0"
EOT;

    /**
     * Minimalistic creator of OASIS OpenDocument
     *
     * @param string $mime desired MIME type
     * @param string $data document content
     *
     * @return string  OASIS OpenDocument data
     *
     * @access  public
     */
    public static function create($mime, $data)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
