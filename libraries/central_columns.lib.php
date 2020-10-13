<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Functions for displaying user preferences pages
 *
 * @package PhpMyAdmin
 */
use PMA\libraries\Charsets;
use PMA\libraries\Message;
use PMA\libraries\Util;
use PMA\libraries\URL;

/**
 * Defines the central_columns parameters for the current user
 *
 * @return array    the central_columns parameters for the current user
 * @access  public
 */
function PMA_centralColumnsGetParams()
{
    static $cfgCentralColumns = null;

    if (null !== $cfgCentralColumns) {
        return $cfgCentralColumns;
    }

    $cfgRelation = PMA_getRelationsParam();

    if ($cfgRelation['centralcolumnswork']) {
        $cfgCentralColumns = array(
            'user'  => $GLOBALS['cfg']['Server']['user'],
            'db'    => $cfgRelation['db'],
            'table' => $cfgRelation['central_columns'],
        );
    } else {
        $cfgCentralColumns = false;
    }

    return $cfgCentralColumns;
}

/**
 * get $num columns of given database from central columns list
 * starting at offset $from
 *
 * @param string $db   selected database
 * @param int    $from starting offset of first result
 * @param int    $num  maximum number of results to return
 *
 * @return array list of $num columns present in central columns list
 * starting at offset $from for the given database
 */
function PMA_getColumnsList($db, $from=0, $num=25)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * get the number of columns present in central list for given db
 *
 * @param string $db current database
 *
 * @return int number of columns in central list of columns for $db
 */
function PMA_getCentralColumnsCount($db)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
/**
 * return the existing columns in central list among the given list of columns
 *
 * @param string  $db        the selected database
 * @param string  $cols      comma separated list of given columns
 * @param boolean $allFields set if need all the fields of existing columns,
 * otherwise only column_name is returned
 *
 * @return array list of columns in central columns among given set of columns
 */
function PMA_findExistingColNames($db, $cols, $allFields=false)
{
    $cfgCentralColumns = PMA_centralColumnsGetParams();
    if (empty($cfgCentralColumns)) {
        return array();
    }
    $pmadb = $cfgCentralColumns['db'];
    $GLOBALS['dbi']->selectDb($pmadb, $GLOBALS['controllink']);
    $central_list_table = $cfgCentralColumns['table'];
    if ($allFields) {
        $query = 'SELECT * FROM ' . Util::backquote($central_list_table) . ' '
            . 'WHERE db_name = \'' . $GLOBALS['dbi']->escapeString($db) . '\' AND col_name IN (' . $cols . ');';
        $has_list = (array) $GLOBALS['dbi']->fetchResult(
            $query,
            null,
            null,
            $GLOBALS['controllink']
        );
        PMA_handleColumnExtra($has_list);
    } else {
        $query = 'SELECT col_name FROM '
            . Util::backquote($central_list_table) . ' '
            . 'WHERE db_name = \'' . $GLOBALS['dbi']->escapeString($db) . '\' AND col_name IN (' . $cols . ');';
        $has_list = (array) $GLOBALS['dbi']->fetchResult(
            $query,
            null,
            null,
            $GLOBALS['controllink']
        );
    }

    return $has_list;
}

/**
 * return error message to be displayed if central columns
 * configuration storage is not completely configured
 *
 * @return Message
 */
function PMA_configErrorMessage()
{
    return Message::error(
        __(
            'The configuration storage is not ready for the central list'
            . ' of columns feature.'
        )
    );
}

/**
 * build the insert query for central columns list given PMA storage
 * db, central_columns table, column name and corresponding definition to be added
 *
 * @param string $column             column to add into central list
 * @param array  $def                list of attributes of the column being added
 * @param string $db                 PMA configuration storage database name
 * @param string $central_list_table central columns configuration storage table name
 *
 * @return string query string to insert the given column
 * with definition into central list
 */
function PMA_getInsertQuery($column, $def, $db, $central_list_table)
{
    $type = "";
    $length = 0;
    $attribute = "";
    if (isset($def['Type'])) {
        $extracted_columnspec = Util::extractColumnSpec($def['Type']);
        $attribute = trim($extracted_columnspec[ 'attribute']);
        $type = $extracted_columnspec['type'];
        $length = $extracted_columnspec['spec_in_brackets'];
    }
    if (isset($def['Attribute'])) {
        $attribute = $def['Attribute'];
    };
    $collation = isset($def['Collation'])?$def['Collation']:"";
    $isNull = ($def['Null'] == "NO")?0:1;
    $extra = isset($def['Extra'])?$def['Extra']:"";
    $default = isset($def['Default'])?$def['Default']:"";
    $insQuery = 'INSERT INTO '
        . Util::backquote($central_list_table) . ' '
        . 'VALUES ( \'' . $GLOBALS['dbi']->escapeString($db) . '\' ,'
        . '\'' . $GLOBALS['dbi']->escapeString($column) . '\',\''
        . $GLOBALS['dbi']->escapeString($type) . '\','
        . '\'' . $GLOBALS['dbi']->escapeString($length) . '\',\''
        . $GLOBALS['dbi']->escapeString($collation) . '\','
        . '\'' . $GLOBALS['dbi']->escapeString($isNull) . '\','
        . '\'' . implode(',', array($extra, $attribute))
        . '\',\'' . $GLOBALS['dbi']->escapeString($default) . '\');';
    return $insQuery;
}

/**
 * If $isTable is true then unique columns from given tables as $field_select
 * are added to central list otherwise the $field_select is considered as
 * list of columns and these columns are added to central list if not already added
 *
 * @param array  $field_select if $isTable is true selected tables list
 * otherwise selected columns list
 * @param bool   $isTable      if passed array is of tables or columns
 * @param string $table        if $isTable is false,
 * then table name to which columns belong
 *
 * @return true|PMA\libraries\Message
 */
function PMA_syncUniqueColumns($field_select, $isTable=true, $table=null)
{
    $cfgCentralColumns = PMA_centralColumnsGetParams();
    if (empty($cfgCentralColumns)) {
        return PMA_configErrorMessage();
    }
    $db = $_REQUEST['db'];
    $pmadb = $cfgCentralColumns['db'];
    $central_list_table = $cfgCentralColumns['table'];
    $GLOBALS['dbi']->selectDb($db, $GLOBALS['userlink']);
    $existingCols = array();
    $cols = "";
    $insQuery = array();
    $fields = array();
    $message = true;
    if ($isTable) {
        foreach ($field_select as $table) {
            $fields[$table] = (array) $GLOBALS['dbi']->getColumns(
                $db,
                $table,
                null,
                true,
                $GLOBALS['userlink']
            );
            foreach ($fields[$table] as $field => $def) {
                $cols .= "'" . $GLOBALS['dbi']->escapeString($field) . "',";
            }
        }

        $has_list = PMA_findExistingColNames($db, trim($cols, ','));
        foreach ($field_select as $table) {
            foreach ($fields[$table] as $field => $def) {
                if (!in_array($field, $has_list)) {
                    $has_list[] = $field;
                    $insQuery[] = PMA_getInsertQuery(
                        $field,
                        $def,
                        $db,
                        $central_list_table
                    );
                } else {
                    $existingCols[] = "'" . $field . "'";
                }
            }
        }
    } else {
        if ($table === null) {
            $table = $_REQUEST['table'];
        }
        foreach ($field_select as $column) {
            $cols .= "'" . $GLOBALS['dbi']->escapeString($column) . "',";
        }
        $has_list = PMA_findExistingColNames($db, trim($cols, ','));
        foreach ($field_select as $column) {
            if (!in_array($column, $has_list)) {
                $has_list[] = $column;
                $field = (array) $GLOBALS['dbi']->getColumns(
                    $db,
                    $table,
                    $column,
                    true,
                    $GLOBALS['userlink']
                );
                $insQuery[] = PMA_getInsertQuery(
                    $column,
                    $field,
                    $db,
                    $central_list_table
                );
            } else {
                $existingCols[] = "'" . $column . "'";
            }
        }
    }
    if (! empty($existingCols)) {
        $existingCols = implode(",", array_unique($existingCols));
        $message = Message::notice(
            sprintf(
                __(
                    'Could not add %1$s as they already exist in central list!'
                ),
                htmlspecialchars($existingCols)
            )
        );
        $message->addMessage(
            Message::notice(
                "Please remove them first "
                . "from central list if you want to update above columns"
            )
        );
    }
    $GLOBALS['dbi']->selectDb($pmadb, $GLOBALS['controllink']);
    if (! empty($insQuery)) {
        foreach ($insQuery as $query) {
            if (!$GLOBALS['dbi']->tryQuery($query, $GLOBALS['controllink'])) {
                $message = Message::error(__('Could not add columns!'));
                $message->addMessage(
                    Message::rawError(
                        $GLOBALS['dbi']->getError($GLOBALS['controllink'])
                    )
                );
                break;
            }
        }
    }
    return $message;
}

/**
 * if $isTable is true it removes all columns of given tables as $field_select from
 * central columns list otherwise $field_select is columns list and it removes
 * given columns if present in central list
 *
 * @param array $field_select if $isTable selected list of tables otherwise
 * selected list of columns to remove from central list
 * @param bool  $isTable      if passed array is of tables or columns
 *
 * @return true|PMA\libraries\Message
 */
function PMA_deleteColumnsFromList($field_select, $isTable=true)
{
    $cfgCentralColumns = PMA_centralColumnsGetParams();
    if (empty($cfgCentralColumns)) {
        return PMA_configErrorMessage();
    }
    $db = $_REQUEST['db'];
    $pmadb = $cfgCentralColumns['db'];
    $central_list_table = $cfgCentralColumns['table'];
    $GLOBALS['dbi']->selectDb($db, $GLOBALS['userlink']);
    $message = true;
    $colNotExist = array();
    $fields = array();
    if ($isTable) {
        $cols = '';
        foreach ($field_select as $table) {
            $fields[$table] = (array) $GLOBALS['dbi']->getColumnNames(
                $db,
                $table,
                $GLOBALS['userlink']
            );
            foreach ($fields[$table] as $col_select) {
                $cols .= '\'' . $GLOBALS['dbi']->escapeString($col_select) . '\',';
            }
        }
        $cols = trim($cols, ',');
        $has_list = PMA_findExistingColNames($db, $cols);
        foreach ($field_select as $table) {
            foreach ($fields[$table] as $column) {
                if (!in_array($column, $has_list)) {
                    $colNotExist[] = "'" . $column . "'";
                }
            }
        }
    } else {
        $cols = '';
        foreach ($field_select as $col_select) {
            $cols .= '\'' . $GLOBALS['dbi']->escapeString($col_select) . '\',';
        }
        $cols = trim($cols, ',');
        $has_list = PMA_findExistingColNames($db, $cols);
        foreach ($field_select as $column) {
            if (!in_array($column, $has_list)) {
                $colNotExist[] = "'" . $column . "'";
            }
        }
    }
    if (!empty($colNotExist)) {
        $colNotExist = implode(",", array_unique($colNotExist));
        $message = Message::notice(
            sprintf(
                __(
                    'Couldn\'t remove Column(s) %1$s '
                    . 'as they don\'t exist in central columns list!'
                ),
                htmlspecialchars($colNotExist)
            )
        );
    }
    $GLOBALS['dbi']->selectDb($pmadb, $GLOBALS['controllink']);

    $query = 'DELETE FROM ' . Util::backquote($central_list_table) . ' '
        . 'WHERE db_name = \'' . $GLOBALS['dbi']->escapeString($db) . '\' AND col_name IN (' . $cols . ');';

    if (!$GLOBALS['dbi']->tryQuery($query, $GLOBALS['controllink'])) {
        $message = Message::error(__('Could not remove columns!'));
        $message->addHtml('<br />' . htmlspecialchars($cols) . '<br />');
        $message->addMessage(
            Message::rawError(
                $GLOBALS['dbi']->getError($GLOBALS['controllink'])
            )
        );
    }
    return $message;
}

/**
 * make the columns of given tables consistent with central list of columns.
 * Updates only those columns which are not being referenced.
 *
 * @param string $db              current database
 * @param array  $selected_tables list of selected tables.
 *
 * @return true|PMA\libraries\Message
 */
function PMA_makeConsistentWithList($db, $selected_tables)
{
    $message = true;
    foreach ($selected_tables as $table) {
        $query = 'ALTER TABLE ' . Util::backquote($table);
        $has_list = PMA_getCentralColumnsFromTable($db, $table, true);
        $GLOBALS['dbi']->selectDb($db, $GLOBALS['userlink']);
        foreach ($has_list as $column) {
            $column_status = PMA_checkChildForeignReferences(
                $db,
                $table,
                $column['col_name']
            );
            //column definition can only be changed if
            //it is not referenced by another column
            if ($column_status['isEditable']) {
                $query .= ' MODIFY ' . Util::backquote($column['col_name']) . ' '
                    . $GLOBALS['dbi']->escapeString($column['col_type']);
                if ($column['col_length']) {
                    $query .= '(' . $column['col_length'] . ')';
                }

                $query .= ' ' . $column['col_attribute'];
                if ($column['col_isNull']) {
                    $query .= ' NULL';
                } else {
                    $query .= ' NOT NULL';
                }

                $query .= ' ' . $column['col_extra'];
                if ($column['col_default']) {
                    if ($column['col_default'] != 'CURRENT_TIMESTAMP') {
                        $query .= ' DEFAULT \'' . $GLOBALS['dbi']->escapeString(
                            $column['col_default']
                        ) . '\'';
                    } else {
                        $query .= ' DEFAULT ' . $GLOBALS['dbi']->escapeString(
                            $column['col_default']
                        );
                    }
                }
                $query .= ',';
            }
        }
        $query = trim($query, " ,") . ";";
        if (!$GLOBALS['dbi']->tryQuery($query, $GLOBALS['userlink'])) {
            if ($message === true) {
                $message = Message::error(
                    $GLOBALS['dbi']->getError($GLOBALS['userlink'])
                );
            } else {
                $message->addText(
                    $GLOBALS['dbi']->getError($GLOBALS['userlink']),
                    '<br />'
                );
            }
        }
    }
    return $message;
}

/**
 * return the columns present in central list of columns for a given
 * table of a given database
 *
 * @param string  $db        given database
 * @param string  $table     given table
 * @param boolean $allFields set if need all the fields of existing columns,
 * otherwise only column_name is returned
 *
 * @return array columns present in central list from given table of given db.
 */
function PMA_getCentralColumnsFromTable($db, $table, $allFields=false)
{
    $cfgCentralColumns = PMA_centralColumnsGetParams();
    if (empty($cfgCentralColumns)) {
        return array();
    }
    $GLOBALS['dbi']->selectDb($db, $GLOBALS['userlink']);
    $fields = (array) $GLOBALS['dbi']->getColumnNames(
        $db,
        $table,
        $GLOBALS['userlink']
    );
    $cols = '';
    foreach ($fields as $col_select) {
        $cols .= '\'' . $GLOBALS['dbi']->escapeString($col_select) . '\',';
    }
    $cols = trim($cols, ',');
    $has_list = PMA_findExistingColNames($db, $cols, $allFields);
    if (! empty($has_list)) {
        return (array)$has_list;
    } else {
        return array();
    }
}

/**
 * update a column in central columns list if a edit is requested
 *
 * @param string $db            current database
 * @param string $orig_col_name original column name before edit
 * @param string $col_name      new column name
 * @param string $col_type      new column type
 * @param string $col_attribute new column attribute
 * @param string $col_length    new column length
 * @param int    $col_isNull    value 1 if new column isNull is true, 0 otherwise
 * @param string $collation     new column collation
 * @param string $col_extra     new column extra property
 * @param string $col_default   new column default value
 *
 * @return true|PMA\libraries\Message
 */
function PMA_updateOneColumn(
    $db,
    $orig_col_name,
    $col_name,
    $col_type,
    $col_attribute,
    $col_length,
    $col_isNull,
    $collation,
    $col_extra,
    $col_default
) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Update Multiple column in central columns list if a chnage is requested
 *
 * @return true|PMA\libraries\Message
 */
function PMA_updateMultipleColumn()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * get the html for table navigation in Central columns page
 *
 * @param int    $total_rows total number of rows in complete result set
 * @param int    $pos        offset of first result with complete result set
 * @param string $db         current database
 *
 * @return string html for table navigation in Central columns page
 */
function PMA_getHTMLforTableNavigation($total_rows, $pos, $db)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * function generate and return the table header for central columns page
 *
 * @param string  $class       styling class of 'th' elements
 * @param string  $title       title of the 'th' elements
 * @param integer $actionCount number of actions
 *
 * @return string html for table header in central columns view/edit page
 */
function PMA_getCentralColumnsTableHeader($class='', $title='', $actionCount=0)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Function generate and return the table header for
 * multiple edit central columns page
 *
 * @param array $header_cells headers list
 *
 * @return string html for table header in central columns multi edit page
 */
function PMA_getCentralColumnsEditTableHeader($header_cells)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * build the dropdown select html for tables of given database
 *
 * @param string $db current database
 *
 * @return string html dropdown for selecting table
 */
function PMA_getHTMLforTableDropdown($db)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * build dropdown select html to select column in selected table,
 * include only columns which are not already in central list
 *
 * @param string $db           current database to which selected table belongs
 * @param string $selected_tbl selected table
 *
 * @return string html to select column
 */
function PMA_getHTMLforColumnDropdown($db, $selected_tbl)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * html to display the form that let user to add a column on Central columns page
 *
 * @param int    $total_rows total number of rows in complete result set
 * @param int    $pos        offset of first result with complete result set
 * @param string $db         current database
 *
 * @return string html to add a column in the central list
 */
function PMA_getHTMLforAddCentralColumn($total_rows, $pos, $db)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * build html for a row in central columns table
 *
 * @param array   $row     array contains complete information of
 * a particular row of central list table
 * @param int     $row_num position the row in the table
 * @param string  $db      current database
 *
 * @return string html of a particular row in the central columns table.
 */
function PMA_getHTMLforCentralColumnsTableRow($row, $row_num, $db)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * build html for editing a row in central columns table
 *
 * @param array   $row     array contains complete information of
 * a particular row of central list table
 * @param int     $row_num position the row in the table
 *
 * @return string html of a particular row in the central columns table.
 */
function PMA_getHTMLforCentralColumnsEditTableRow($row, $row_num)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * get the list of columns in given database excluding
 * the columns present in current table
 *
 * @param string $db    selected database
 * @param string $table current table name
 *
 * @return string encoded list of columns present in central list for the given
 *                database
 */
function PMA_getCentralColumnsListRaw($db, $table)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Get HTML for "check all" check box with "with selected" dropdown
 *
 * @param string $pmaThemeImage pma theme image url
 * @param string $text_dir      url for text directory
 *
 * @return string $html_output
 */
function PMA_getCentralColumnsTableFooter($pmaThemeImage, $text_dir)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * function generate and return the table footer for
 * multiple edit central columns page
 *
 * @return string html for table footer in central columns multi edit page
 */
function PMA_getCentralColumnsEditTableFooter()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
/**
 * Column `col_extra` is used to store both extra and attributes for a column.
 * This method separates them.
 *
 * @param array &$columns_list columns list
 *
 * @return void
 */
function PMA_handleColumnExtra(&$columns_list)
{
    foreach ($columns_list as &$row) {
        $vals = explode(',', $row['col_extra']);

        if (in_array('BINARY', $vals)) {
            $row['col_attribute'] = 'BINARY';
        } elseif (in_array('UNSIGNED', $vals)) {
            $row['col_attribute'] = 'UNSIGNED';
        } elseif (in_array('UNSIGNED ZEROFILL', $vals)) {
            $row['col_attribute'] = 'UNSIGNED ZEROFILL';
        } elseif (in_array('on update CURRENT_TIMESTAMP', $vals)) {
            $row['col_attribute'] = 'on update CURRENT_TIMESTAMP';
        } else {
            $row['col_attribute'] = '';
        }

        if (in_array('auto_increment', $vals)) {
            $row['col_extra'] = 'auto_increment';
        } else {
            $row['col_extra'] = '';
        }
    }
}

/**
 * build html for adding a new user defined column to central list
 *
 * @param string  $db         current database
 * @param integer $total_rows number of rows in central columns
 *
 * @return string html of the form to let user add a new user defined column to the
 *                list
 */
function PMA_getHTMLforAddNewColumn($db, $total_rows)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * Get HTML for editing page central columns
 *
 * @param array  $selected_fld Array containing the selected fields
 * @param string $selected_db  String containing the name of database
 *
 * @return string HTML for complete editing page for central columns
 */
function PMA_getHTMLforEditingPage($selected_fld, $selected_db)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
