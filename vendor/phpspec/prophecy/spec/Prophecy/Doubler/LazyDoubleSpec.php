<?php

namespace spec\Prophecy\Doubler;

use PhpSpec\ObjectBehavior;
use Prophecy\Doubler\Doubler;
use Prophecy\Prophecy\ProphecySubjectInterface;

class LazyDoubleSpec extends ObjectBehavior
{
    public function let(Doubler $doubler)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_anonymous_double_instance_by_default($doubler, ProphecySubjectInterface $double)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_class_double_instance_if_set($doubler, ProphecySubjectInterface $double, \ReflectionClass $class)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_returns_same_double_instance_if_called_2_times(
        $doubler,
        ProphecySubjectInterface $double1,
        ProphecySubjectInterface $double2
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_setParentClass_throws_ClassNotFoundException_if_class_not_found()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_setParentClass_throws_exception_if_prophecy_is_already_created(
        $doubler,
        ProphecySubjectInterface $double
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_addInterface_throws_InterfaceNotFoundException_if_no_interface_found()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_addInterface_throws_exception_if_prophecy_is_already_created(
        $doubler,
        ProphecySubjectInterface $double
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
