<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * TCPDF wrapper class.
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries;

use TCPDF;
use TCPDF_FONTS;

/**
 * PDF export base class providing basic configuration.
 *
 * @package PhpMyAdmin
 */
class PDF extends TCPDF
{
    public $footerset;
    public $Alias = array();

    /**
     * PDF font to use.
     */
    const PMA_PDF_FONT = 'DejaVuSans';

    /**
     * Constructs PDF and configures standard parameters.
     *
     * @param string  $orientation page orientation
     * @param string  $unit        unit
     * @param string  $format      the format used for pages
     * @param boolean $unicode     true means that the input text is unicode
     * @param string  $encoding    charset encoding; default is UTF-8.
     * @param boolean $diskcache   if true reduce the RAM memory usage by caching
     *                             temporary data on filesystem (slower).
     * @param boolean $pdfa        If TRUE set the document to PDF/A mode.
     *
     * @access public
     */
    public function __construct(
        $orientation = 'P',
        $unit = 'mm',
        $format = 'A4',
        $unicode = true,
        $encoding = 'UTF-8',
        $diskcache = false,
        $pdfa=false
    ) {
        parent::__construct(
            $orientation,
            $unit,
            $format,
            $unicode,
            $encoding,
            $diskcache,
            $pdfa
        );
        $this->SetAuthor('phpMyAdmin ' . PMA_VERSION);
        $this->AddFont('DejaVuSans', '', 'dejavusans.php');
        $this->AddFont('DejaVuSans', 'B', 'dejavusansb.php');
        $this->SetFont(PDF::PMA_PDF_FONT, '', 14);
        $this->setFooterFont(array(PDF::PMA_PDF_FONT, '', 14));
    }

    /**
     * This function must be named "Footer" to work with the TCPDF library
     *
     * @return void
     */
    public function Footer()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Function to set alias which will be expanded on page rendering.
     *
     * @param string $name  name of the alias
     * @param string $value value of the alias
     *
     * @return void
     */
    public function SetAlias($name, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Improved with alias expanding.
     *
     * @return void
     */
    public function _putpages()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Displays an error message
     *
     * @param string $error_message the error message
     *
     * @return void
     */
    public function Error($error_message = '')
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sends file as a download to user.
     *
     * @param string $filename file name
     *
     * @return void
     */
    public function Download($filename)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
