<?php

namespace spec\Prophecy\Exception\Doubler;

use PhpSpec\ObjectBehavior;

class DoubleExceptionSpec extends ObjectBehavior
{
    public function it_is_a_double_exception()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
