<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Holds the PMA\libraries\plugins\export\TableProperty class
 *
 * @package    PhpMyAdmin-Export
 * @subpackage CodeGen
 */
namespace PMA\libraries\plugins\export;

/**
 * PMA\libraries\plugins\export\TableProperty class
 *
 * @package    PhpMyAdmin-Export
 * @subpackage CodeGen
 */
class TableProperty
{
    /**
     * Name
     *
     * @var string
     */
    public $name;

    /**
     * Type
     *
     * @var string
     */
    public $type;

    /**
     * Whether the key is nullable or not
     *
     * @var bool
     */
    public $nullable;

    /**
     * The key
     *
     * @var int
     */
    public $key;

    /**
     * Default value
     *
     * @var mixed
     */
    public $defaultValue;

    /**
     * Extension
     *
     * @var string
     */
    public $ext;

    /**
     * Constructor
     *
     * @param array $row table row
     */
    public function __construct($row)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the pure type
     *
     * @return string type
     */
    public function getPureType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tells whether the key is null or not
     *
     * @return bool true if the key is not null, false otherwise
     */
    public function isNotNull()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tells whether the key is unique or not
     *
     * @return bool true if the key is unique, false otherwise
     */
    public function isUnique()
    {
        return $this->key == "PRI" || $this->key == "UNI" ? "true" : "false";
    }

    /**
    * Gets the .NET primitive type
    *
    * @return string type
    */
    public function getDotNetPrimitiveType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the .NET object type
     *
     * @return string type
     */
    public function getDotNetObjectType()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets the index name
     *
     * @return string containing the name of the index
     */
    public function getIndexName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Tells whether the key is primary or not
     *
     * @return bool true if the key is primary, false otherwise
     */
    public function isPK()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Formats a string for C#
     *
     * @param string $text string to be formatted
     *
     * @return string formatted text
     */
    public function formatCs($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Formats a string for XML
     *
     * @param string $text string to be formatted
     *
     * @return string formatted text
     */
    public function formatXml($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Formats a string
     *
     * @param string $text string to be formatted
     *
     * @return string formatted text
     */
    public function format($text)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
