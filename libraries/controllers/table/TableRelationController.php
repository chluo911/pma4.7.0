<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Holds the PMA\TableRelationController
 *
 * @package PMA
 */

namespace PMA\libraries\controllers\table;

require_once 'libraries/index.lib.php';

use PMA\libraries\controllers\TableController;
use PMA\libraries\DatabaseInterface;
use PMA\libraries\Index;
use PMA\libraries\Table;
use PMA\libraries\Template;
use PMA\libraries\Util;

/**
 * Handles table relation logic
 *
 * @package PhpMyAdmin
 */
class TableRelationController extends TableController
{
    /**
     * @var array $options_array
     */
    protected $options_array;

    /**
     * @var array $cfgRelation
     */
    protected $cfgRelation;

    /**
     * @var array $existrel
     */
    protected $existrel;

    /**
     * @var string $disp
     */
    protected $disp;

    /**
     * @var string $tbl_storage_engine
     */
    protected $tbl_storage_engine;

    /**
     * @var array $existrel_foreign
     */
    protected $existrel_foreign;

    /**
     * @var Table $udp_query
     */
    protected $upd_query;

    /**
     * Constructor
     *
     * @param array  $options_array      Options
     * @param array  $cfgRelation        Config relation
     * @param string $tbl_storage_engine Table storage engine
     * @param array  $existrel           Relations
     * @param array  $existrel_foreign   External relations
     * @param string $disp               Display
     * @param string $upd_query          Update query
     */
    public function __construct(
        $options_array,
        $cfgRelation,
        $tbl_storage_engine,
        $existrel,
        $existrel_foreign,
        $disp,
        $upd_query
    ) {
        parent::__construct();

        $this->options_array = $options_array;
        $this->cfgRelation = $cfgRelation;
        $this->tbl_storage_engine = $tbl_storage_engine;
        $this->existrel = $existrel;
        $this->existrel_foreign = $existrel_foreign;
        $this->disp = $disp;
        $this->upd_query = $upd_query;
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
     * Update for display field
     *
     * @return void
     */
    public function updateForDisplayField()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Update for FK
     *
     * @return void
     */
    public function updateForForeignKeysAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Update for internal relation
     *
     * @return void
     */
    public function updateForInternalRelationAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Send table columns for foreign table dropdown
     *
     * @return void
     *
     */
    public function getDropdownValueForTableAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Send database selection values for dropdown
     *
     * @return void
     *
     */
    public function getDropdownValueForDbAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
