<?php

namespace spec\Prophecy\Doubler;

use PhpSpec\ObjectBehavior;

class NameGeneratorSpec extends ObjectBehavior
{
    public function its_name_generates_name_based_on_simple_class_reflection(\ReflectionClass $class)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_name_generates_name_based_on_namespaced_class_reflection(\ReflectionClass $class)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_name_generates_name_based_on_interface_shortnames(
        \ReflectionClass $interface1,
        \ReflectionClass $interface2
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_generates_proper_name_for_no_class_and_interfaces_list()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_name_generates_name_based_only_on_class_if_its_available(
        \ReflectionClass $class,
        \ReflectionClass $interface1,
        \ReflectionClass $interface2
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getMatchers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
