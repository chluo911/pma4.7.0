<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Classes to create relation schema in EPS format.
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries\plugins\schema\eps;

use PMA\libraries\plugins\schema\dia\RelationStatsDia;
use PMA\libraries\plugins\schema\dia\TableStatsDia;
use PMA\libraries\plugins\schema\ExportRelationSchema;
use PMA\libraries\plugins\schema\pdf\TableStatsPdf;
use PMA\libraries\plugins\schema\svg\TableStatsSvg;

/**
 * EPS Relation Schema Class
 *
 * Purpose of this class is to generate the EPS Document
 * which is used for representing the database diagrams.
 * This class uses post script commands and with
 * the combination of these commands actually helps in preparing EPS Document.
 *
 * This class inherits ExportRelationSchema class has common functionality added
 * to this class
 *
 * @package PhpMyAdmin
 * @name    Eps_Relation_Schema
 */
class EpsRelationSchema extends ExportRelationSchema
{
    /**
     * @var TableStatsDia[]|TableStatsEps[]|TableStatsPdf[]|TableStatsSvg[]
     */
    private $_tables = array();

    /** @var RelationStatsDia[] Relations */
    private $_relations = array();

    private $_tablewidth;

    /**
     * The "PMA_EPS_Relation_Schema" constructor
     *
     * Upon instantiation This starts writing the EPS document
     * user will be prompted for download as .eps extension
     *
     * @param string $db database name
     *
     * @see PMA_EPS
     */
    public function __construct($db)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Output Eps Document for download
     *
     * @return void
     */
    public function showOutput()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Defines relation objects
     *
     * @param string  $masterTable    The master table name
     * @param string  $font           The font
     * @param int     $fontSize       The font size
     * @param string  $masterField    The relation field in the master table
     * @param string  $foreignTable   The foreign table name
     * @param string  $foreignField   The relation field in the foreign table
     * @param boolean $tableDimension Whether to display table position or not
     *
     * @return void
     *
     * @see _setMinMax,Table_Stats_Eps::__construct(),
     * PMA\libraries\plugins\schema\eps\RelationStatsEps::__construct()
     */
    private function _addRelation(
        $masterTable,
        $font,
        $fontSize,
        $masterField,
        $foreignTable,
        $foreignField,
        $tableDimension
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draws relation arrows and lines connects master table's master field to
     * foreign table's foreign field
     *
     * @return void
     *
     * @see Relation_Stats_Eps::relationDraw()
     */
    private function _drawRelations()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Draws tables
     *
     * @return void
     *
     * @see Table_Stats_Eps::Table_Stats_tableDraw()
     */
    private function _drawTables()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
