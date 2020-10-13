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
 * Builder for mocked or stubbed invocations.
 *
 * Provides methods for building expectations without having to resort to
 * instantiating the various matchers manually. These methods also form a
 * more natural way of reading the expectation. This class should be together
 * with the test case PHPUnit_Framework_MockObject_TestCase.
 *
 * @since Class available since Release 1.0.0
 */
class PHPUnit_Framework_MockObject_Builder_InvocationMocker implements PHPUnit_Framework_MockObject_Builder_MethodNameMatch
{
    /**
     * @var PHPUnit_Framework_MockObject_Stub_MatcherCollection
     */
    protected $collection;

    /**
     * @var PHPUnit_Framework_MockObject_Matcher
     */
    protected $matcher;

    /**
     * @param PHPUnit_Framework_MockObject_Stub_MatcherCollection $collection
     * @param PHPUnit_Framework_MockObject_Matcher_Invocation     $invocationMatcher
     */
    public function __construct(PHPUnit_Framework_MockObject_Stub_MatcherCollection $collection, PHPUnit_Framework_MockObject_Matcher_Invocation $invocationMatcher)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return PHPUnit_Framework_MockObject_Matcher
     */
    public function getMatcher()
    {
        return $this->matcher;
    }

    /**
     * @param  mixed                                                 $id
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function id($id)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  PHPUnit_Framework_MockObject_Stub                     $stub
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function will(PHPUnit_Framework_MockObject_Stub $stub)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  mixed                                                 $value
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function willReturn($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  array                                                 $valueMap
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function willReturnMap(array $valueMap)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  mixed                                                 $argumentIndex
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function willReturnArgument($argumentIndex)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  callable                                              $callback
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function willReturnCallback($callback)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function willReturnSelf()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  mixed                                                 $value, ...
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function willReturnOnConsecutiveCalls()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  Exception                                             $exception
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function willThrowException(Exception $exception)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  mixed                                                 $id
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function after($id)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Validate that a parameters matcher can be defined, throw exceptions otherwise.
     *
     * @throws PHPUnit_Framework_Exception
     */
    private function canDefineParameters()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  mixed                                                 $argument, ...
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function with()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  mixed ...$argument
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function withConsecutive()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function withAnyParameters()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param  PHPUnit_Framework_Constraint|string                   $constraint
     * @return PHPUnit_Framework_MockObject_Builder_InvocationMocker
     */
    public function method($constraint)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
