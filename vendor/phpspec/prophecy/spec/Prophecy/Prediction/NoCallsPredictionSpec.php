<?php

namespace spec\Prophecy\Prediction;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument\ArgumentsWildcard;
use Prophecy\Call\Call;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Prophecy\ObjectProphecy;

class NoCallsPredictionSpec extends ObjectBehavior
{
    public function it_is_prediction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_nothing_if_there_is_no_calls_made(ObjectProphecy $object, MethodProphecy $method)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_throws_UnexpectedCallsException_if_calls_found(
        ObjectProphecy $object,
        MethodProphecy $method,
        Call $call,
        ArgumentsWildcard $arguments
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
