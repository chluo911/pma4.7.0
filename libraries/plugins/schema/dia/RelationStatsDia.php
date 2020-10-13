<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Contains PMA\libraries\plugins\schema\dia\RelationStatsDia class
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\dia;

/**
 * Relation preferences/statistics
 *
 * This class fetches the table master and foreign fields positions
 * and helps in generating the Table references and then connects
 * master table's master field to foreign table's foreign key
 * in dia XML document.
 *
 * @package PhpMyAdmin
 * @name    Relation_Stats_Dia
 * @see     PMA_DIA
 */
class RelationStatsDia
{
    protected $diagram;
    /**
     * Defines properties
     */
    public $srcConnPointsRight;
    public $srcConnPointsLeft;
    public $destConnPointsRight;
    public $destConnPointsLeft;
    public $masterTableId;
    public $foreignTableId;
    public $masterTablePos;
    public $foreignTablePos;
    public $referenceColor;

    /**
     * The "PMA\libraries\plugins\schema\dia\RelationStatsDia" constructor
     *
     * @param object $diagram       The DIA diagram
     * @param string $master_table  The master table name
     * @param string $master_field  The relation field in the master table
     * @param string $foreign_table The foreign table name
     * @param string $foreign_field The relation field in the foreign table
     *
     * @see Relation_Stats_Dia::_getXy
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
     * Each Table object have connection points
     * which is used to connect to other objects in Dia
     * we detect the position of key in fields and
     * then determines its left and right connection
     * points.
     *
     * @param string $table  The current table name
     * @param string $column The relation column name
     *
     * @return array Table right,left connection points and key position
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

    /**
     * Draws relation references
     *
     * connects master table's master field to foreign table's
     * foreign field using Dia object type Database - Reference
     * Dia object is used to generate the XML of Dia Document.
     * Database reference Object and their attributes are involved
     * in the combination of displaying Database - reference on Dia Document.
     *
     * @param boolean $showColor Whether to use one color per relation or not
     *                           if showColor is true then an array of $listOfColors
     *                           will be used to choose the random colors for
     *                           references lines. we can change/add more colors to
     *                           this
     *
     * @return boolean|void
     *
     * @access public
     * @see    PDF
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
