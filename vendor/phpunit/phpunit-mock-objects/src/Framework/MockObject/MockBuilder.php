<?php
/*
 * This file is part of the PHPUnit_MockObject package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Implementation of the Builder pattern for Mock objects.
 *
 * @since      File available since Release 1.0.0
 */
class PHPUnit_Framework_MockObject_MockBuilder
{
    /**
     * @var PHPUnit_Framework_TestCase
     */
    private $testCase;

    /**
     * @var string
     */
    private $type;

    /**
     * @var array
     */
    private $methods = array();

    /**
     * @var string
     */
    private $mockClassName = '';

    /**
     * @var array
     */
    private $constructorArgs = array();

    /**
     * @var bool
     */
    private $originalConstructor = true;

    /**
     * @var bool
     */
    private $originalClone = true;

    /**
     * @var bool
     */
    private $autoload = true;

    /**
     * @var bool
     */
    private $cloneArguments = false;

    /**
     * @var bool
     */
    private $callOriginalMethods = false;

    /**
     * @var object
     */
    private $proxyTarget = null;

    /**
     * @param PHPUnit_Framework_TestCase $testCase
     * @param array|string               $type
     */
    public function __construct(PHPUnit_Framework_TestCase $testCase, $type)
    {
        $this->testCase = $testCase;
        $this->type     = $type;
    }

    /**
     * Creates a mock object using a fluent interface.
     *
     * @return PHPUnit_Framework_MockObject_MockObject
     */
    public function getMock()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates a mock object for an abstract class using a fluent interface.
     *
     * @return PHPUnit_Framework_MockObject_MockObject
     */
    public function getMockForAbstractClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates a mock object for a trait using a fluent interface.
     *
     * @return PHPUnit_Framework_MockObject_MockObject
     */
    public function getMockForTrait()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Specifies the subset of methods to mock. Default is to mock all of them.
     *
     * @param  array|null                               $methods
     * @return PHPUnit_Framework_MockObject_MockBuilder
     */
    public function setMethods($methods)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Specifies the arguments for the constructor.
     *
     * @param  array                                    $args
     * @return PHPUnit_Framework_MockObject_MockBuilder
     */
    public function setConstructorArgs(array $args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Specifies the name for the mock class.
     *
     * @param  string                                   $name
     * @return PHPUnit_Framework_MockObject_MockBuilder
     */
    public function setMockClassName($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Disables the invocation of the original constructor.
     *
     * @return PHPUnit_Framework_MockObject_MockBuilder
     */
    public function disableOriginalConstructor()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enables the invocation of the original constructor.
     *
     * @return PHPUnit_Framework_MockObject_MockBuilder
     * @since  Method available since Release 1.2.0
     */
    public function enableOriginalConstructor()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Disables the invocation of the original clone constructor.
     *
     * @return PHPUnit_Framework_MockObject_MockBuilder
     */
    public function disableOriginalClone()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enables the invocation of the original clone constructor.
     *
     * @return PHPUnit_Framework_MockObject_MockBuilder
     * @since  Method available since Release 1.2.0
     */
    public function enableOriginalClone()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Disables the use of class autoloading while creating the mock object.
     *
     * @return PHPUnit_Framework_MockObject_MockBuilder
     */
    public function disableAutoload()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enables the use of class autoloading while creating the mock object.
     *
     * @return PHPUnit_Framework_MockObject_MockBuilder
     * @since  Method available since Release 1.2.0
     */
    public function enableAutoload()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Disables the cloning of arguments passed to mocked methods.
     *
     * @return PHPUnit_Framework_MockObject_MockBuilder
     * @since  Method available since Release 1.2.0
     */
    public function disableArgumentCloning()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enables the cloning of arguments passed to mocked methods.
     *
     * @return PHPUnit_Framework_MockObject_MockBuilder
     * @since  Method available since Release 1.2.0
     */
    public function enableArgumentCloning()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Enables the invocation of the original methods.
     *
     * @return PHPUnit_Framework_MockObject_MockBuilder
     * @since  Method available since Release 2.0.0
     */
    public function enableProxyingToOriginalMethods()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Disables the invocation of the original methods.
     *
     * @return PHPUnit_Framework_MockObject_MockBuilder
     * @since  Method available since Release 2.0.0
     */
    public function disableProxyingToOriginalMethods()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Sets the proxy target.
     *
     * @param  object                                   $object
     * @return PHPUnit_Framework_MockObject_MockBuilder
     * @since  Method available since Release 2.0.0
     */
    public function setProxyTarget($object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
