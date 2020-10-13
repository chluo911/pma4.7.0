<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * set of functions for user group handling
 *
 * @package PhpMyAdmin
 */
use PMA\libraries\URL;

/**
 * Return HTML to list the users belonging to a given user group
 *
 * @param string $userGroup user group name
 *
 * @return string HTML to list the users belonging to a given user group
 */
function PMA_getHtmlForListingUsersofAGroup($userGroup)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns HTML for the 'user groups' table
 *
 * @return string HTML for the 'user groups' table
 */
function PMA_getHtmlForUserGroupsTable()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns the list of allowed menu tab names
 * based on a data row from usergroup table.
 *
 * @param array  $row   row of usergroup table
 * @param string $level 'server', 'db' or 'table'
 *
 * @return string comma separated list of allowed menu tab names
 */
function _getAllowedTabNames($row, $level)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Deletes a user group
 *
 * @param string $userGroup user group name
 *
 * @return void
 */
function PMA_deleteUserGroup($userGroup)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns HTML for add/edit user group dialog
 *
 * @param string $userGroup name of the user group in case of editing
 *
 * @return string HTML for add/edit user group dialog
 */
function PMA_getHtmlToEditUserGroup($userGroup = null)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Returns HTML for checkbox groups to choose
 * tabs of 'server', 'db' or 'table' levels.
 *
 * @param string $title    title of the checkbox group
 * @param string $level    'server', 'db' or 'table'
 * @param array  $selected array of selected allowed tabs
 *
 * @return string HTML for checkbox groups
 */
function _getTabList($title, $level, $selected)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Add/update a user group with allowed menu tabs.
 *
 * @param string  $userGroup user group name
 * @param boolean $new       whether this is a new user group
 *
 * @return void
 */
function PMA_editUserGroup($userGroup, $new = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
