<?php

namespace spec\Prophecy\Exception\Call;

use PhpSpec\ObjectBehavior;
use Prophecy\Prophecy\ObjectProphecy;
use spec\Prophecy\Exception\Prophecy\Prophecy;

class UnexpectedCallExceptionSpec extends ObjectBehavior
{
    public function let(ObjectProphecy $objectProphecy)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_is_prophecy_exception()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_exposes_method_name_through_getter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_exposes_arguments_through_getter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
