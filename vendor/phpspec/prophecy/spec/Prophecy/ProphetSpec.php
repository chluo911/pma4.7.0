<?php

namespace spec\Prophecy;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Prophecy\Argument\ArgumentsWildcard;
use Prophecy\Doubler\Doubler;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Prophecy\ProphecySubjectInterface;

class ProphetSpec extends ObjectBehavior
{
    public function let(Doubler $doubler, ProphecySubjectInterface $double)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_constructs_new_prophecy_on_prophesize_call()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_constructs_new_prophecy_with_parent_class_if_specified($doubler, ProphecySubjectInterface $newDouble)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_constructs_new_prophecy_with_interface_if_specified($doubler, ProphecySubjectInterface $newDouble)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_exposes_all_created_prophecies_through_getter()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_nothing_during_checkPredictions_call_if_no_predictions_defined()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_throws_AggregateException_if_defined_predictions_fail(
        MethodProphecy $method1,
        MethodProphecy $method2,
        ArgumentsWildcard $arguments1,
        ArgumentsWildcard $arguments2
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_exposes_doubler_through_getter($doubler)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
