<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Abstract class for the schema export plugins
 *
 * @package PhpMyAdmin
 */

namespace PMA\libraries\plugins;

use PMA\libraries\properties\options\items\BoolPropertyItem;
use PMA\libraries\properties\options\groups\OptionsPropertyMainGroup;
use PMA\libraries\properties\plugins\SchemaPluginProperties;

/**
 * Provides a common interface that will have to be implemented by all of the
 * schema export plugins. Some of the plugins will also implement other public
 * methods, but those are not declared here, because they are not implemented
 * by all export plugins.
 *
 * @package PhpMyAdmin
 */
abstract class SchemaPlugin
{
    /**
     * PMA\libraries\properties\plugins\SchemaPluginProperties object containing
     * the specific schema export plugin type properties
     *
     * @var SchemaPluginProperties
     */
    protected $properties;

    /**
     * Gets the export specific format plugin properties
     *
     * @return SchemaPluginProperties
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Sets the export plugins properties and is implemented by
     * each schema export plugin
     *
     * @return void
     */
    abstract protected function setProperties();

    /**
     * Exports the schema into the specified format.
     *
     * @param string $db database name
     *
     * @return bool Whether it succeeded
     */
    abstract public function exportSchema($db);

    /**
     * Adds export options common to all plugins.
     *
     * @param \PMA\libraries\properties\options\groups\OptionsPropertyMainGroup $propertyGroup property group
     *
     * @return void
     */
    protected function addCommonOptions(OptionsPropertyMainGroup $propertyGroup)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns the array of paper sizes
     *
     * @return array array of paper sizes
     */
    protected function getPaperSizeArray()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
