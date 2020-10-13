<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * The InnoDB storage engine
 *
 * @package PhpMyAdmin-Engines
 */
namespace PMA\libraries\engines;

use PMA\libraries\StorageEngine;
use PMA\libraries\Util;

/**
 * The InnoDB storage engine
 *
 * @package PhpMyAdmin-Engines
 */
class Innodb extends StorageEngine
{
    /**
     * Returns array with variable names related to InnoDB storage engine
     *
     * @return array   variable names
     */
    public function getVariables()
    {
        return array(
            'innodb_data_home_dir'            => array(
                'title' => __('Data home directory'),
                'desc'  => __(
                    'The common part of the directory path for all InnoDB data '
                    . 'files.'
                ),
            ),
            'innodb_data_file_path'           => array(
                'title' => __('Data files'),
            ),
            'innodb_autoextend_increment'     => array(
                'title' => __('Autoextend increment'),
                'desc'  => __(
                    'The increment size for extending the size of an autoextending '
                    . 'tablespace when it becomes full.'
                ),
                'type'  => PMA_ENGINE_DETAILS_TYPE_NUMERIC,
            ),
            'innodb_buffer_pool_size'         => array(
                'title' => __('Buffer pool size'),
                'desc'  => __(
                    'The size of the memory buffer InnoDB uses to cache data and '
                    . 'indexes of its tables.'
                ),
                'type'  => PMA_ENGINE_DETAILS_TYPE_SIZE,
            ),
            'innodb_additional_mem_pool_size' => array(
                'title' => 'innodb_additional_mem_pool_size',
                'type'  => PMA_ENGINE_DETAILS_TYPE_SIZE,
            ),
            'innodb_buffer_pool_awe_mem_mb'   => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_SIZE,
            ),
            'innodb_checksums'                => array(),
            'innodb_commit_concurrency'       => array(),
            'innodb_concurrency_tickets'      => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_NUMERIC,
            ),
            'innodb_doublewrite'              => array(),
            'innodb_fast_shutdown'            => array(),
            'innodb_file_io_threads'          => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_NUMERIC,
            ),
            'innodb_file_per_table'           => array(),
            'innodb_flush_log_at_trx_commit'  => array(),
            'innodb_flush_method'             => array(),
            'innodb_force_recovery'           => array(),
            'innodb_lock_wait_timeout'        => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_NUMERIC,
            ),
            'innodb_locks_unsafe_for_binlog'  => array(),
            'innodb_log_arch_dir'             => array(),
            'innodb_log_archive'              => array(),
            'innodb_log_buffer_size'          => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_SIZE,
            ),
            'innodb_log_file_size'            => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_SIZE,
            ),
            'innodb_log_files_in_group'       => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_NUMERIC,
            ),
            'innodb_log_group_home_dir'       => array(),
            'innodb_max_dirty_pages_pct'      => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_NUMERIC,
            ),
            'innodb_max_purge_lag'            => array(),
            'innodb_mirrored_log_groups'      => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_NUMERIC,
            ),
            'innodb_open_files'               => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_NUMERIC,
            ),
            'innodb_support_xa'               => array(),
            'innodb_sync_spin_loops'          => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_NUMERIC,
            ),
            'innodb_table_locks'              => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_BOOLEAN,
            ),
            'innodb_thread_concurrency'       => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_NUMERIC,
            ),
            'innodb_thread_sleep_delay'       => array(
                'type' => PMA_ENGINE_DETAILS_TYPE_NUMERIC,
            ),
        );
    }

    /**
     * Returns the pattern to be used in the query for SQL variables
     * related to InnoDb storage engine
     *
     * @return string  SQL query LIKE pattern
     */
    public function getVariablesLikePattern()
    {
        return 'innodb\\_%';
    }

    /**
     * Get information pages
     *
     * @return array detail pages
     */
    public function getInfoPages()
    {
        if ($this->support < PMA_ENGINE_SUPPORT_YES) {
            return array();
        }
        $pages = array();
        $pages['Bufferpool'] = __('Buffer Pool');
        $pages['Status'] = __('InnoDB Status');

        return $pages;
    }

    /**
     * returns html tables with stats over inno db buffer pool
     *
     * @return string  html table with stats
     */
    public function getPageBufferpool()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * returns InnoDB status
     *
     * @return string  result of SHOW ENGINE INNODB STATUS inside pre tags
     */
    public function getPageStatus()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * returns string with filename for the MySQL helppage
     * about this storage engine
     *
     * @return string  mysql helppage filename
     */
    public function getMysqlHelpPage()
    {
        return 'innodb-storage-engine';
    }

    /**
     * Gets the InnoDB plugin version number
     *
     * @return string the version number, or empty if not running as a plugin
     */
    public function getInnodbPluginVersion()
    {
        return $GLOBALS['dbi']->fetchValue('SELECT @@innodb_version;');
    }

    /**
     * Gets the InnoDB file format
     *
     * (do not confuse this with phpMyAdmin's storage engine plugins!)
     *
     * @return string the InnoDB file format
     */
    public function getInnodbFileFormat()
    {
        return $GLOBALS['dbi']->fetchValue(
            "SHOW GLOBAL VARIABLES LIKE 'innodb_file_format';",
            0,
            1
        );
    }

    /**
     * Verifies if this server supports the innodb_file_per_table feature
     *
     * (do not confuse this with phpMyAdmin's storage engine plugins!)
     *
     * @return boolean whether this feature is supported or not
     */
    public function supportsFilePerTable()
    {
        return (
            $GLOBALS['dbi']->fetchValue(
                "SHOW GLOBAL VARIABLES LIKE 'innodb_file_per_table';",
                0,
                1
            ) == 'ON'
        );
    }
}
