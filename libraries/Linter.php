<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Analyzes a query and gives user feedback.
 *
 * @package PhpMyAdmin
 */
namespace PMA\libraries;

use PhpMyAdmin\SqlParser\Lexer;
use PhpMyAdmin\SqlParser\Parser;
use PhpMyAdmin\SqlParser\UtfString;
use PhpMyAdmin\SqlParser\Utils\Error as ParserError;

/**
 * The linter itself.
 *
 * @package PhpMyAdmin
 */
class Linter
{

    /**
     * Gets the starting position of each line.
     *
     * @param string $str String to be analyzed.
     *
     * @return array
     */
    public static function getLines($str)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Computes the number of the line and column given an absolute position.
     *
     * @param array $lines The starting position of each line.
     * @param int   $pos   The absolute position
     *
     * @return array
     */
    public static function findLineNumberAndColumn($lines, $pos)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Runs the linting process.
     *
     * @param string $query The query to be checked.
     *
     * @return array
     */
    public static function lint($query)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
