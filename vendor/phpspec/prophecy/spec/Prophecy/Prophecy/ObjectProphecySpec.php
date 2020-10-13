<?php

namespace spec\Prophecy\Prophecy;

use phpDocumentor\Reflection\DocBlock\Tags\Method;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Prophecy\Argument\ArgumentsWildcard;
use Prophecy\Call\Call;
use Prophecy\Call\CallCenter;
use Prophecy\Doubler\Doubler;
use Prophecy\Doubler\LazyDouble;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Prophecy\ProphecySubjectInterface;
use Prophecy\Prophecy\RevealerInterface;

class ObjectProphecySpec extends ObjectBehavior
{
    public function let(LazyDouble $lazyDouble, ProphecySubjectInterface $double)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_implements_ProphecyInterface()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_sets_parentClass_during_willExtend_call($lazyDouble)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_adds_interface_during_willImplement_call($lazyDouble)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_sets_constructor_arguments_during_willBeConstructedWith_call($lazyDouble)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_have_method_prophecies_by_default()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_get_method_prophecies_by_method_name(
        MethodProphecy $method1,
        MethodProphecy $method2,
        ArgumentsWildcard $arguments
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_return_empty_array_if_no_method_prophecies_found()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_proxy_makeProphecyMethodCall_to_CallCenter($lazyDouble, CallCenter $callCenter)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_reveal_arguments_and_return_values_from_callCenter(
        $lazyDouble,
        CallCenter $callCenter,
        RevealerInterface $revealer
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_proxy_getProphecyMethodCalls_to_CallCenter(
        $lazyDouble,
        CallCenter $callCenter,
        ArgumentsWildcard $wildcard,
        Call $call
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_addMethodProphecy_adds_method_prophecy(
        MethodProphecy $methodProphecy,
        ArgumentsWildcard $argumentsWildcard
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_addMethodProphecy_handles_prophecies_with_different_arguments(
        MethodProphecy $methodProphecy1,
        MethodProphecy $methodProphecy2,
        ArgumentsWildcard $argumentsWildcard1,
        ArgumentsWildcard $argumentsWildcard2
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_addMethodProphecy_handles_prophecies_for_different_methods(
        MethodProphecy $methodProphecy1,
        MethodProphecy $methodProphecy2,
        ArgumentsWildcard $argumentsWildcard1,
        ArgumentsWildcard $argumentsWildcard2
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_addMethodProphecy_throws_exception_when_method_has_no_ArgumentsWildcard(MethodProphecy $methodProphecy)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_null_after_checkPredictions_call_if_there_is_no_method_prophecies()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_throws_AggregateException_during_checkPredictions_if_predictions_fail(
        MethodProphecy $methodProphecy1,
        MethodProphecy $methodProphecy2,
        ArgumentsWildcard $argumentsWildcard1,
        ArgumentsWildcard $argumentsWildcard2
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_new_MethodProphecy_instance_for_arbitrary_call(
        Doubler $doubler,
        ProphecySubjectInterface $reflection
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_same_MethodProphecy_for_same_registered_signature(
        Doubler $doubler,
        ProphecySubjectInterface $reflection
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_new_MethodProphecy_for_different_signatures(
        Doubler $doubler,
        ProphecySubjectInterface $reflection
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_new_MethodProphecy_for_all_callback_signatures(
        Doubler $doubler,
        ProphecySubjectInterface $reflection
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class ObjectProphecySpecFixtureA
{
    public $errors;
}

class ObjectProphecySpecFixtureB extends ObjectProphecySpecFixtureA
{
    public $errors;
    public $value = null;

    public function __construct($value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
