<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Contains PMA\libraries\plugins\schema\eps\RelationStatsEps class
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\eps;

use PMA\libraries\plugins\schema\RelationStats;

/**
 * Relation preferences/statistics
 *
 * This class fetches the table master and foreign fields positions
 * and helps in generating the Table references and then connects
 * master table's master field to foreign table's foreign key
 * in EPS document.
 *
 * @package PhpMyAdmin
 * @name    Relation_Stats_Eps
 * @see     PMA_EPS
 */
class RelationStatsEps extends RelationStats
{
    /**
     * The "PMA\libraries\plugins\schema\eps\RelationStatsEps" constructor
     *
     * @param object $diagram       The EPS diagram
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
     * draws relation links and arrows
     * shows foreign key relations
     *
     * @see PMA_EPS
     *
     * @return void
     */
    public function relationDraw()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
