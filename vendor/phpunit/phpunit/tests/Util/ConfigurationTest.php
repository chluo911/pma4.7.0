<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * @since      Class available since Release 3.3.0
 */
class Util_ConfigurationTest extends PHPUnit_Framework_TestCase
{
    protected $configuration;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getInstance
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testExceptionIsThrownForNotExistingConfigurationFile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getPHPUnitConfiguration
     */
    public function testShouldReadColorsWhenTrueInConfigurationfile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getPHPUnitConfiguration
     */
    public function testShouldReadColorsWhenFalseInConfigurationfile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getPHPUnitConfiguration
     */
    public function testShouldReadColorsWhenEmptyInConfigurationfile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getPHPUnitConfiguration
     */
    public function testShouldReadColorsWhenInvalidInConfigurationfile()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getFilterConfiguration
     */
    public function testFilterConfigurationIsReadCorrectly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getGroupConfiguration
     */
    public function testGroupConfigurationIsReadCorrectly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getListenerConfiguration
     */
    public function testListenerConfigurationIsReadCorrectly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getLoggingConfiguration
     */
    public function testLoggingConfigurationIsReadCorrectly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getPHPConfiguration
     */
    public function testPHPConfigurationIsReadCorrectly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @backupGlobals enabled
     * @covers PHPUnit_Util_Configuration::handlePHPConfiguration
     */
    public function testPHPConfigurationIsHandledCorrectly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @backupGlobals enabled
     *
     * @see https://github.com/sebastianbergmann/phpunit/issues/1181
     */
    public function testHandlePHPConfigurationDoesNotOverwrittenExistingEnvArrayVariables()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @backupGlobals enabled
     *
     * @see https://github.com/sebastianbergmann/phpunit/issues/1181
     */
    public function testHandlePHPConfigurationDoesNotOverriteVariablesFromPutEnv()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getPHPUnitConfiguration
     */
    public function testPHPUnitConfigurationIsReadCorrectly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getSeleniumBrowserConfiguration
     */
    public function testSeleniumBrowserConfigurationIsReadCorrectly()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Util_Configuration::getInstance
     */
    public function testXincludeInConfiguration()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @ticket 1311
     * @covers PHPUnit_Util_Configuration::getLoggingConfiguration
     * @covers PHPUnit_Util_Configuration::getPHPConfiguration
     * @covers PHPUnit_Util_Configuration::getPHPUnitConfiguration
     * @covers PHPUnit_Util_Configuration::getTestSuiteConfiguration
     * @covers PHPUnit_Util_Configuration::getFilterConfiguration
     *
     * @uses   PHPUnit_Util_Configuration::getInstance
     */
    public function testWithEmptyConfigurations()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Asserts that the values in $actualConfiguration equal $expectedConfiguration.
     *
     * @param PHPUnit_Util_Configuration $expectedConfiguration
     * @param PHPUnit_Util_Configuration $actualConfiguration
     */
    protected function assertConfigurationEquals(PHPUnit_Util_Configuration $expectedConfiguration, PHPUnit_Util_Configuration $actualConfiguration)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
