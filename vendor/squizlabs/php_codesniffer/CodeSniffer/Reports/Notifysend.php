<?php
/**
 * Notify-send report for PHP_CodeSniffer.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Christian Weiske <christian.weiske@netresearch.de>
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2012-2014 Christian Weiske
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 * Notify-send report for PHP_CodeSniffer.
 *
 * Supported configuration parameters:
 * - notifysend_path    - Full path to notify-send cli command
 * - notifysend_timeout - Timeout in milliseconds
 * - notifysend_showok  - Show "ok, all fine" messages (0/1)
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Christian Weiske <christian.weiske@netresearch.de>
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2012-2014 Christian Weiske
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class PHP_CodeSniffer_Reports_Notifysend implements PHP_CodeSniffer_Report
{

    /**
     * Notification timeout in milliseconds.
     *
     * @var integer
     */
    protected $timeout = 3000;

    /**
     * Path to notify-send command.
     *
     * @var string
     */
    protected $path = 'notify-send';

    /**
     * Show "ok, all fine" messages.
     *
     * @var boolean
     */
    protected $showOk = true;

    /**
     * Version of installed notify-send executable.
     *
     * @var string
     */
    protected $version = null;

    /**
     * A record of the last file checked.
     *
     * This is used in case we only checked one file and need to print
     * the name/path of the file. We wont have access to the checked file list
     * after the run has been completed.
     *
     * @var string
     */
    private $_lastCheckedFile = '';


    /**
     * Load configuration data.
     */
    public function __construct()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end __construct()


    /**
     * Generate a partial report for a single processed file.
     *
     * Function should return TRUE if it printed or stored data about the file
     * and FALSE if it ignored the file. Returning TRUE indicates that the file and
     * its data should be counted in the grand totals.
     *
     * @param array                $report      Prepared report data.
     * @param PHP_CodeSniffer_File $phpcsFile   The file being reported on.
     * @param boolean              $showSources Show sources?
     * @param int                  $width       Maximum allowed line width.
     *
     * @return boolean
     */
    public function generateFileReport(
        $report,
        PHP_CodeSniffer_File $phpcsFile,
        $showSources=false,
        $width=80
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end generateFileReport()


    /**
     * Generates a summary of errors and warnings for each file processed.
     *
     * @param string  $cachedData    Any partial report data that was returned from
     *                               generateFileReport during the run.
     * @param int     $totalFiles    Total number of files processed during the run.
     * @param int     $totalErrors   Total number of errors found during the run.
     * @param int     $totalWarnings Total number of warnings found during the run.
     * @param int     $totalFixable  Total number of problems that can be fixed.
     * @param boolean $showSources   Show sources?
     * @param int     $width         Maximum allowed line width.
     * @param boolean $toScreen      Is the report being printed to screen?
     *
     * @return void
     */
    public function generate(
        $cachedData,
        $totalFiles,
        $totalErrors,
        $totalWarnings,
        $totalFixable,
        $showSources=false,
        $width=80,
        $toScreen=true
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end generate()


    /**
     * Generate the error message to show to the user.
     *
     * @param int $totalFiles    Total number of files processed during the run.
     * @param int $totalErrors   Total number of errors found during the run.
     * @param int $totalWarnings Total number of warnings found during the run.
     *
     * @return string Error message or NULL if no error/warning found.
     */
    protected function generateMessage($totalFiles, $totalErrors, $totalWarnings)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end generateMessage()


    /**
     * Tell the user that all is fine and no error/warning has been found.
     *
     * @return void
     */
    protected function notifyAllFine()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end notifyAllFine()


    /**
     * Tell the user that errors/warnings have been found.
     *
     * @param string $msg Message to display.
     *
     * @return void
     */
    protected function notifyErrors($msg)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end notifyErrors()


    /**
     * Generate and return the basic notify-send command string to execute.
     *
     * @return string Shell command with common parameters.
     */
    protected function getBasicCommand()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }//end getBasicCommand()
}//end class
