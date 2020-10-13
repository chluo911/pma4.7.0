<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */

/**
 * Holds the PMA\TableChartController
 *
 * @package PMA
 */

namespace PMA\libraries\controllers\table;

use PMA\libraries\controllers\TableController;
use PMA\libraries\Message;
use PMA\libraries\Response;
use PMA\libraries\Template;
use PMA\libraries\Util;

/**
 * Handles table related logic
 *
 * @package PhpMyAdmin
 */
class TableChartController extends TableController
{

    /**
     * @var string $sql_query
     */
    protected $sql_query;

    /**
     * @var string $url_query
     */
    protected $url_query;

    /**
     * @var array $cfg
     */
    protected $cfg;

    /**
     * Constructor
     *
     * @param string $sql_query Query
     * @param string $url_query Query URL
     * @param array  $cfg       Configuration
     */
    public function __construct($sql_query, $url_query, $cfg)
    {
        parent::__construct();

        $this->sql_query = $sql_query;
        $this->url_query = $url_query;
        $this->cfg = $cfg;
    }

    /**
     * Execute the query and return the result
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
     * Handle ajax request
     *
     * @return void
     */
    public function ajaxAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
