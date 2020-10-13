<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */

/**
 * Holds the PMA\TableIndexesController
 *
 * @package PMA
 */

namespace PMA\libraries\controllers\table;

use PMA\libraries\controllers\TableController;
use PMA\libraries\Index;
use PMA\libraries\Message;
use PMA\libraries\Template;
use PMA\libraries\Util;
use PMA\libraries\Response;

/**
 * Class TableIndexesController
 *
 * @package PMA\libraries\controllers\table
 */
class TableIndexesController extends TableController
{
    /**
     * @var Index $index
     */
    protected $index;

    /**
     * Constructor
     *
     * @param Index $index Index
     */
    public function __construct($index)
    {
        parent::__construct();

        $this->index = $index;
    }

    /**
     * Index
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
     * Display the form to edit/create an index
     *
     * @return void
     */
    public function displayFormAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Process the data from the edit/create index form,
     * run the query to build the new index
     * and moves back to "tbl_sql.php"
     *
     * @return void
     */
    public function doSaveDataAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
