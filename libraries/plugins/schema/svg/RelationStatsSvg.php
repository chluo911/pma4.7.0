<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Contains PMA\libraries\plugins\schema\svg\RelationStatsSvg class
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\svg;

use PMA\libraries\plugins\schema\RelationStats;

/**
 * Relation preferences/statistics
 *
 * This class fetches the table master and foreign fields positions
 * and helps in generating the Table references and then connects
 * master table's master field to foreign table's foreign key
 * in SVG XML document.
 *
 * @package PhpMyAdmin
 * @name    Relation_Stats_Svg
 * @see     PMA_SVG::printElementLine
 */
class RelationStatsSvg extends RelationStats
{
    /**
     * The "PMA\libraries\plugins\schema\svg\RelationStatsSvg" constructor
     *
     * @param object $diagram       The SVG diagram
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
     * draws relation links and arrows shows foreign key relations
     *
     * @param boolean $showColor Whether to use one color per relation or not
     *
     * @return void
     * @access public
     *
     * @see    PMA_SVG
     */
    public function relationDraw($showColor)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
