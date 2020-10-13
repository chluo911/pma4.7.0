<?php

namespace spec\Prophecy\Prediction;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Prophecy\Argument\ArgumentsWildcard;
use Prophecy\Call\Call;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Prophecy\ObjectProphecy;

class CallPredictionSpec extends ObjectBehavior
{
    public function it_is_prediction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_nothing_if_there_is_more_than_one_call_been_made(
        ObjectProphecy $object,
        MethodProphecy $method,
        Call $call
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_throws_NoCallsException_if_no_calls_found(
        ObjectProphecy $object,
        MethodProphecy $method,
        ArgumentsWildcard $arguments
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
