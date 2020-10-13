<?php

namespace spec\Prophecy\Exception\Prophecy;

use PhpSpec\ObjectBehavior;
use Prophecy\Prophecy\ObjectProphecy;

class ObjectProphecyExceptionSpec extends ObjectBehavior
{
    public function let(ObjectProphecy $objectProphecy)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_be_a_prophecy_exception()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_holds_double_reference($objectProphecy)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
