<?php

namespace spec\Prophecy\Prediction;

use PhpSpec\ObjectBehavior;

use Prophecy\Call\Call;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Prophecy\ObjectProphecy;
use RuntimeException;

class CallbackPredictionSpec extends ObjectBehavior
{
    public function let()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_is_prediction()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_proxies_call_to_callback(ObjectProphecy $object, MethodProphecy $method, Call $call)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
