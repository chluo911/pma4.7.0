<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */

/**
 * Holds the PMA\TableIndexesController
 *
 * @package PMA
 */

namespace PMA\libraries\controllers\table;

use PMA\libraries\controllers\TableController;
use PMA\libraries\Message;
use PMA\libraries\Template;
use PMA\libraries\gis\GISVisualization;
use PMA\libraries\URL;

require_once 'libraries/common.inc.php';
require_once 'libraries/db_common.inc.php';

/**
 * Class TableGisVisualizationController
 *
 * @package PMA\libraries\controllers\table
 */
class TableGisVisualizationController extends TableController
{

    /**
     * @var array $url_params
     */
    protected $url_params;

    /**
     * @var string $sql_query
     */
    protected $sql_query;

    /**
     * @var array $visualizationSettings
     */
    protected $visualizationSettings;

    /**
     * @var \PMA\libraries\gis\GISVisualization $visualization
     */
    protected $visualization;

    /**
     * Constructor
     *
     * @param string $sql_query             SQL query for retrieving GIS data
     * @param array  $url_params            array of URL parameters
     * @param string $goto                  goto script
     * @param string $back                  back script
     * @param array  $visualizationSettings visualization settings
     */
    public function __construct(
        $sql_query,
        $url_params,
        $goto,
        $back,
        $visualizationSettings
    ) {
        parent::__construct();

        $this->sql_query = $sql_query;
        $this->url_params = $url_params;
        $this->url_params['goto'] = $goto;
        $this->url_params['back'] = $back;
        $this->visualizationSettings = $visualizationSettings;
    }

    /**
     * Save to file
     *
     * @return void
     */
    public function saveToFileAction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
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
}
