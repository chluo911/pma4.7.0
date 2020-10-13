<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * This class is responsible for instantiating
 * the various components of the navigation panel
 *
 * @package PhpMyAdmin-navigation
 */
namespace PMA\libraries\navigation;

use PMA\libraries\config\PageSettings;
use PMA\libraries\Message;
use PMA\libraries\Response;
use PMA\libraries\Util;
use PMA\libraries\URL;

/**
 * The navigation panel - displays server, db and table selection tree
 *
 * @package PhpMyAdmin-Navigation
 */
class Navigation
{
    /**
     * Renders the navigation tree, or part of it
     *
     * @return string The navigation tree
     */
    public function getDisplay()
    {
        /* Init */
        $retval = '';
        $response = Response::getInstance();
        if (! $response->isAjax()) {
            $header = new NavigationHeader();
            $retval = $header->getDisplay();
        }
        $tree = new NavigationTree();
        if (! $response->isAjax()
            || ! empty($_REQUEST['full'])
            || ! empty($_REQUEST['reload'])
        ) {
            if ($GLOBALS['cfg']['ShowDatabasesNavigationAsTree']) {
                // provide database tree in navigation
                $navRender = $tree->renderState();
            } else {
                // provide legacy pre-4.0 navigation
                $navRender = $tree->renderDbSelect();
            }
        } else {
            $navRender = $tree->renderPath();
        }
        if (! $navRender) {
            $retval .= Message::error(
                __('An error has occurred while loading the navigation display')
            )->getDisplay();
        } else {
            $retval .= $navRender;
        }

        if (! $response->isAjax()) {
            // closes the tags that were opened by the navigation header
            $retval .= '</div>'; // pma_navigation_tree
            $retval .= '<div id="pma_navi_settings_container">';
            if (!defined('PMA_DISABLE_NAVI_SETTINGS')) {
                $retval .= PageSettings::getNaviSettings();
            }
            $retval .= '</div>'; //pma_navi_settings_container
            $retval .= '</div>'; // pma_navigation_content
            $retval .= $this->_getDropHandler();
            $retval .= '</div>'; // pma_navigation
        }

        return $retval;
    }

    /**
     * Add an item of navigation tree to the hidden items list in PMA database.
     *
     * @param string $itemName  name of the navigation tree item
     * @param string $itemType  type of the navigation tree item
     * @param string $dbName    database name
     * @param string $tableName table name if applicable
     *
     * @return void
     */
    public function hideNavigationItem(
        $itemName,
        $itemType,
        $dbName,
        $tableName = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Inserts Drag and Drop Import handler
     *
     * @return string html code for drop handler
     */
    private function _getDropHandler()
    {
        $retval = '';
        $retval .= '<div class="pma_drop_handler">'
            . __('Drop files here')
            . '</div>';
        $retval .= '<div class="pma_sql_import_status">';
        $retval .= '<h2>SQL upload ( ';
        $retval .= '<span class="pma_import_count">0</span> ';
        $retval .= ') <span class="close">x</span>';
        $retval .= '<span class="minimize">-</span></h2>';
        $retval .= '<div></div>';
        $retval .= '</div>';
        return $retval;
    }

    /**
     * Remove a hidden item of navigation tree from the
     * list of hidden items in PMA database.
     *
     * @param string $itemName  name of the navigation tree item
     * @param string $itemType  type of the navigation tree item
     * @param string $dbName    database name
     * @param string $tableName table name if applicable
     *
     * @return void
     */
    public function unhideNavigationItem(
        $itemName,
        $itemType,
        $dbName,
        $tableName = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns HTML for the dialog to show hidden navigation items.
     *
     * @param string $dbName    database name
     * @param string $itemType  type of the items to include
     * @param string $tableName table name
     *
     * @return string HTML for the dialog to show hidden navigation items
     */
    public function getItemUnhideDialog($dbName, $itemType = null, $tableName = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
