<?php
class Framework_MockObject_GeneratorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PHPUnit_Framework_MockObject_Generator
     */
    protected $generator;

    protected function setUp()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_MockObject_Generator::getMock
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetMockFailsWhenInvalidFunctionNameIsPassedInAsAFunctionToMock()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_MockObject_Generator::getMock
     */
    public function testGetMockCanCreateNonExistingFunctions()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_MockObject_Generator::getMock
     * @expectedException PHPUnit_Framework_MockObject_RuntimeException
     * @expectedExceptionMessage duplicates: "foo, foo"
     */
    public function testGetMockGeneratorFails()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_MockObject_Generator::getMockForAbstractClass
     */
    public function testGetMockForAbstractClassDoesNotFailWhenFakingInterfaces()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_MockObject_Generator::getMockForAbstractClass
     */
    public function testGetMockForAbstractClassStubbingAbstractClass()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_MockObject_Generator::getMockForAbstractClass
     */
    public function testGetMockForAbstractClassWithNonExistentMethods()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_MockObject_Generator::getMockForAbstractClass
     */
    public function testGetMockForAbstractClassShouldCreateStubsOnlyForAbstractMethodWhenNoMethodsWereInformed()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @dataProvider getMockForAbstractClassExpectsInvalidArgumentExceptionDataprovider
     * @covers PHPUnit_Framework_MockObject_Generator::getMockForAbstractClass
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetMockForAbstractClassExpectingInvalidArgumentException($className, $mockClassName)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_MockObject_Generator::getMockForAbstractClass
     * @expectedException PHPUnit_Framework_MockObject_RuntimeException
     */
    public function testGetMockForAbstractClassAbstractClassDoesNotExist()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Dataprovider for test "testGetMockForAbstractClassExpectingInvalidArgumentException"
     */
    public static function getMockForAbstractClassExpectsInvalidArgumentExceptionDataprovider()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers PHPUnit_Framework_MockObject_Generator::getMockForTrait
     * @requires PHP 5.4.0
     */
    public function testGetMockForTraitWithNonExistentMethodsAndNonAbstractMethods()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @covers   PHPUnit_Framework_MockObject_Generator::getMockForTrait
     * @requires PHP 5.4.0
     */
    public function testGetMockForTraitStubbingAbstractMethod()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @requires PHP 5.4.0
     */
    public function testGetMockForSingletonWithReflectionSuccess()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Same as "testGetMockForSingletonWithReflectionSuccess", but we expect
     * warning for PHP < 5.4.0 since PHPUnit will try to execute private __wakeup
     * on unserialize
     */
    public function testGetMockForSingletonWithUnserializeFail()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * ReflectionClass::getMethods for SoapClient on PHP 5.3 produces PHP Fatal Error
     * @runInSeparateProcess
     */
    public function testGetMockForSoapClientReflectionMethodsDuplication()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
