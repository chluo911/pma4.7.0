<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */

/**
 * Holds the PMA\libraries\controllers\server\ServerBinlogController
 *
 * @package PMA\libraries\controllers\server
 */

namespace PMA\libraries\controllers\server;

use PMA\libraries\controllers\Controller;
use PMA\libraries\DatabaseInterface;
use PMA\libraries\Message;
use PMA\libraries\Util;
use PMA\libraries\Template;
use PMA\libraries\URL;

/**
 * Handles viewing binary logs
 *
 * @package PMA\libraries\controllers\server
 */
class ServerBinlogController extends Controller
{
    /**
     * array binary log files
     */
    protected $binary_logs;

    /**
     * Constructs ServerBinlogController
     */
    public function __construct()
    {
        parent::__construct();
        $this->binary_logs = $this->dbi->fetchResult(
            'SHOW MASTER LOGS',
            'Log_name',
            null,
            null,
            DatabaseInterface::QUERY_STORE
        );
    }

    /**
     * Index action
     *
     * @return void
     */
    public function indexAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the html for log selector.
     *
     * @param array $url_params links parameters
     *
     * @return string
     */
    private function _getLogSelector($url_params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the html for binary log information.
     *
     * @param array $url_params links parameters
     *
     * @return string
     */
    private function _getLogInfo($url_params)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the html for Navigation Row.
     *
     * @param array $url_params     Links parameters
     * @param int   $pos            Position to display
     * @param int   $num_rows       Number of results row
     * @param bool  $dontlimitchars Whether limit chars
     *
     * @return string
     */
    private function _getNavigationRow($url_params, $pos, $num_rows, $dontlimitchars)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the html for all binary log items.
     *
     * @param resource $result         MySQL Query result
     * @param bool     $dontlimitchars Whether limit chars
     *
     * @return string
     */
    private function _getAllLogItemInfo($result, $dontlimitchars)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
