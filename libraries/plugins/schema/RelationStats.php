<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Contains abstract class to hold relation preferences/statistics
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema;

/**
 * Relations preferences/statistics
 *
 * This class fetches the table master and foreign fields positions
 * and helps in generating the Table references and then connects
 * master table's master field to foreign table's foreign key.
 *
 * @package PhpMyAdmin
 * @abstract
 */
abstract class RelationStats
{
    protected $diagram;
    /**
     * Defines properties
     */
    public $xSrc;
    public $ySrc;
    public $srcDir;
    public $destDir;
    public $xDest;
    public $yDest;
    public $wTick;

    /**
     * The constructor
     *
     * @param object $diagram       The diagram
     * @param string $master_table  The master table name
     * @param string $master_field  The relation field in the master table
     * @param string $foreign_table The foreign table name
     * @param string $foreign_field The relation field in the foreign table
     */
    public function __construct(
        $diagram,
        $master_table,
        $master_field,
        $foreign_table,
        $foreign_field
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets arrows coordinates
     *
     * @param string $table  The current table name
     * @param string $column The relation column name
     *
     * @return array Arrows coordinates
     *
     * @access private
     */
    private function _getXy($table, $column)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
