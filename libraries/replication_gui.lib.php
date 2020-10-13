<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Functions for the replication GUI
 *
 * @package PhpMyAdmin
 */
use PMA\libraries\Message;
use PMA\libraries\Response;
use PMA\libraries\URL;

/**
 * returns HTML for error message
 *
 * @return String HTML code
 */
function PMA_getHtmlForErrorMessage()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * returns HTML for master replication
 *
 * @return String HTML code
 */
function PMA_getHtmlForMasterReplication()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * returns HTML for master replication configuration
 *
 * @return String HTML code
 */
function PMA_getHtmlForMasterConfiguration()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * returns HTML for slave replication configuration
 *
 * @param bool  $server_slave_status      Whether it is Master or Slave
 * @param array $server_slave_replication Slave replication
 *
 * @return String HTML code
 */
function PMA_getHtmlForSlaveConfiguration(
    $server_slave_status,
    $server_slave_replication
) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * returns HTML for Slave Error Management
 *
 * @param String $slave_skip_error_link error link
 *
 * @return String HTML code
 */
function PMA_getHtmlForSlaveErrorManagement($slave_skip_error_link)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * returns HTML for not configure for a server replication
 *
 * @return String HTML code
 */
function PMA_getHtmlForNotServerReplication()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * returns HTML code for selecting databases
 *
 * @return String HTML code
 */
function PMA_getHtmlForReplicationDbMultibox()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * returns HTML for changing master
 *
 * @param String $submitname - submit button name
 *
 * @return String HTML code
 */
function PMA_getHtmlForReplicationChangeMaster($submitname)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * returns HTML code for Add user input div
 *
 * @param array $label_array label tag elements
 * @param array $input_array input tag elements
 *
 * @return String HTML code
 */
function PMA_getHtmlForAddUserInputDiv($label_array, $input_array)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * This function returns html code for table with replication status.
 *
 * @param string  $type   either master or slave
 * @param boolean $hidden if true, then default style is set to hidden,
 *                        default value false
 * @param boolean $title  if true, then title is displayed, default true
 *
 * @return String HTML code
 */
function PMA_getHtmlForReplicationStatusTable($type, $hidden = false, $title = true)
{
    global ${"{$type}_variables"};
    global ${"{$type}_variables_alerts"};
    global ${"{$type}_variables_oks"};
    global ${"server_{$type}_replication"};
    global ${"strReplicationStatus_{$type}"};

    $html = '';

    // TODO check the Masters server id?
    // seems to default to '1' when queried via SHOW VARIABLES ,
    // but resulted in error on the master when slave connects
    // [ERROR] Error reading packet from server: Misconfigured master
    // - server id was not set ( server_errno=1236)
    // [ERROR] Got fatal error 1236: 'Misconfigured master
    // - server id was not set' from master when reading data from binary log
    //
    //$server_id = $GLOBALS['dbi']->fetchValue(
    //    "SHOW VARIABLES LIKE 'server_id'", 0, 1
    //);

    $html .= '<div id="replication_' . $type . '_section" style="';
    $html .= ($hidden ? 'display: none;' : '') . '"> ';

    if ($title) {
        if ($type == 'master') {
            $html .= '<h4><a name="replication_' . $type . '"></a>';
            $html .= __('Master status') . '</h4>';
        } else {
            $html .= '<h4><a name="replication_' . $type . '"></a>';
            $html .= __('Slave status') . '</h4>';
        }
    } else {
        $html .= '<br />';
    }

    $html .= '   <table id="server' . $type . 'replicationsummary" class="data"> ';
    $html .= '   <thead>';
    $html .= '    <tr>';
    $html .= '     <th>' . __('Variable') . '</th>';
    $html .= '        <th>' . __('Value') . '</th>';
    $html .= '    </tr>';
    $html .= '   </thead>';
    $html .= '   <tbody>';

    foreach (${"{$type}_variables"} as $variable) {
        $html .= '   <tr>';
        $html .= '     <td class="name">';
        $html .= htmlspecialchars($variable);
        $html .= '     </td>';
        $html .= '     <td class="value">';

        // TODO change to regexp or something, to allow for negative match
        if (isset(${"{$type}_variables_alerts"}[$variable])
            && ${"{$type}_variables_alerts"}[$variable] == ${"server_{$type}_replication"}[0][$variable]
        ) {
            $html .= '<span class="attention">';
        } elseif (isset(${"{$type}_variables_oks"}[$variable])
            && ${"{$type}_variables_oks"}[$variable] == ${"server_{$type}_replication"}[0][$variable]
        ) {
            $html .= '<span class="allfine">';
        } else {
            $html .= '<span>';
        }
        // allow wrapping long table lists into multiple lines
        static $variables_wrap = array(
            'Replicate_Do_DB', 'Replicate_Ignore_DB',
            'Replicate_Do_Table', 'Replicate_Ignore_Table',
            'Replicate_Wild_Do_Table', 'Replicate_Wild_Ignore_Table');
        if (in_array($variable, $variables_wrap)) {
            $html .= htmlspecialchars(str_replace(
                ',',
                ', ',
                ${"server_{$type}_replication"}[0][$variable]
            ));
        } else {
            $html .= htmlspecialchars(${"server_{$type}_replication"}[0][$variable]);
        }
        $html .= '</span>';

        $html .= '  </td>';
        $html .= ' </tr>';
    }

    $html .= '   </tbody>';
    $html .= ' </table>';
    $html .= ' <br />';
    $html .= '</div>';

    return $html;
}

/**
 * returns html code for table with slave users connected to this master
 *
 * @param boolean $hidden - if true, then default style is set to hidden,
 *                        - default value false
 *
 * @return string
 */
function PMA_getHtmlForReplicationSlavesTable($hidden = false)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * get the correct username and hostname lengths for this MySQL server
 *
 * @return array   username length, hostname length
 */
function PMA_replicationGetUsernameHostnameLength()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * returns html code to add a replication slave user to the master
 *
 * @return String HTML code
 */
function PMA_getHtmlForReplicationMasterAddSlaveuser()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
/**
 *  returns html code to add a replication slave user to the master
 *
 * @param int $username_length Username length
 *
 * @return String HTML code
 */
function PMA_getHtmlForAddUserLoginForm($username_length)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * returns HTML for TableInfoForm
 *
 * @param int $hostname_length Selected hostname length
 *
 * @return String HTML code
 */
function PMA_getHtmlForTableInfoForm($hostname_length)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * handle control requests
 *
 * @return NULL
 */
function PMA_handleControlRequest()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
/**
 * handle control requests for Slave Change Master
 *
 * @return boolean
 */
function PMA_handleRequestForSlaveChangeMaster()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * handle control requests for Slave Server Control
 *
 * @return boolean
 */
function PMA_handleRequestForSlaveServerControl()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}

/**
 * handle control requests for Slave Skip Error
 *
 * @return boolean
 */
function PMA_handleRequestForSlaveSkipError()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
