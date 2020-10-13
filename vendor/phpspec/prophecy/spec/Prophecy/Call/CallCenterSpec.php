<?php

namespace spec\Prophecy\Call;

use PhpSpec\ObjectBehavior;
use Prophecy\Promise\PromiseInterface;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Prophecy\ObjectProphecy;
use Prophecy\Argument\ArgumentsWildcard;

class CallCenterSpec extends ObjectBehavior
{
    public function let(ObjectProphecy $objectProphecy)
    {
    }

    public function it_records_calls_made_through_makeCall_method(ObjectProphecy $objectProphecy, ArgumentsWildcard $wildcard)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_null_for_any_call_through_makeCall_if_no_method_prophecies_added(
        $objectProphecy
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_executes_promise_of_method_prophecy_that_matches_signature_passed_to_makeCall(
        $objectProphecy,
        MethodProphecy $method1,
        MethodProphecy $method2,
        MethodProphecy $method3,
        ArgumentsWildcard $arguments1,
        ArgumentsWildcard $arguments2,
        ArgumentsWildcard $arguments3,
        PromiseInterface $promise
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_executes_promise_of_method_prophecy_that_matches_with_highest_score_to_makeCall(
        $objectProphecy,
        MethodProphecy $method1,
        MethodProphecy $method2,
        MethodProphecy $method3,
        ArgumentsWildcard $arguments1,
        ArgumentsWildcard $arguments2,
        ArgumentsWildcard $arguments3,
        PromiseInterface $promise
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_throws_exception_if_call_does_not_match_any_of_defined_method_prophecies(
        $objectProphecy,
        MethodProphecy $method,
        ArgumentsWildcard $arguments
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_null_if_method_prophecy_that_matches_makeCall_arguments_has_no_promise(
        $objectProphecy,
        MethodProphecy $method,
        ArgumentsWildcard $arguments
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_finds_recorded_calls_by_a_method_name_and_arguments_wildcard(
        $objectProphecy,
        ArgumentsWildcard $wildcard
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
