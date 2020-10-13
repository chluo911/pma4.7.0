<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Functionality for the navigation tree
 *
 * @package PhpMyAdmin-Navigation
 */
namespace PMA\libraries\navigation\nodes;

use PMA;
use PMA\libraries\navigation\NodeFactory;
use PMA\libraries\Util;

/**
 * Represents a container for column nodes in the navigation tree
 *
 * @package PhpMyAdmin-Navigation
 */
class NodeColumnContainer extends Node
{
    /**
     * Initialises the class
     */
    public function __construct()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
