<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * hold PMA\libraries\SystemDatabase class
 *
 * @package PMA
 */
namespace PMA\libraries;

require_once 'libraries/database_interface.inc.php';

/**
 * Class SystemDatabase
 *
 * @package PMA
 */
class SystemDatabase
{
    /**
     * @var DatabaseInterface
     */
    protected $dbi;

    /**
     * Get instance of SystemDatabase
     *
     * @param DatabaseInterface $dbi Database interface for the system database
     *
     */
    public function __construct(DatabaseInterface $dbi)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get existing data on transformations applied for
     * columns in a particular table
     *
     * @param string $db Database name looking for
     *
     * @return \mysqli_result Result of executed SQL query
     */
    public function getExistingTransformationData($db)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get SQL query for store new transformation details of a VIEW
     *
     * @param object $pma_transformation_data Result set of SQL execution
     * @param array  $column_map              Details of VIEW columns
     * @param string $view_name               Name of the VIEW
     * @param string $db                      Database name of the VIEW
     *
     * @return string $new_transformations_sql SQL query for new transformations
     */
    public function getNewTransformationDataSql(
        $pma_transformation_data,
        $column_map,
        $view_name,
        $db
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
