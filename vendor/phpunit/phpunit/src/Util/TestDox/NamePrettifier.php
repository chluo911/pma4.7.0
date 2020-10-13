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
 * Prettifies class and method names for use in TestDox documentation.
 *
 * @since Class available since Release 2.1.0
 */
class PHPUnit_Util_TestDox_NamePrettifier
{
    /**
     * @var string
     */
    protected $prefix = 'Test';

    /**
     * @var string
     */
    protected $suffix = 'Test';

    /**
     * @var array
     */
    protected $strings = array();

    /**
     * Prettifies the name of a test class.
     *
     * @param string $name
     *
     * @return string
     */
    public function prettifyTestClass($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Prettifies the name of a test method.
     *
     * @param string $name
     *
     * @return string
     */
    public function prettifyTestMethod($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the prefix of test names.
     *
     * @param string $prefix
     */
    public function setPrefix($prefix)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the suffix of test names.
     *
     * @param string $suffix
     */
    public function setSuffix($suffix)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
