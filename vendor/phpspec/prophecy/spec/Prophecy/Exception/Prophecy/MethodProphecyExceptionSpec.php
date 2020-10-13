<?php

namespace spec\Prophecy\Exception\Prophecy;

use PhpSpec\ObjectBehavior;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Prophecy\ObjectProphecy;
use spec\Prophecy\Exception\Prophecy;

class MethodProphecyExceptionSpec extends ObjectBehavior
{
    public function let(ObjectProphecy $objectProphecy, MethodProphecy $methodProphecy)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_extends_DoubleException()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_holds_a_stub_reference($methodProphecy)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
