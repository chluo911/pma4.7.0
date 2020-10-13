<?php

namespace spec\Prophecy\Doubler\Generator;

use phpDocumentor\Reflection\DocBlock\Tags\Method;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Prophecy\Doubler\Generator\Node\ArgumentNode;
use Prophecy\Doubler\Generator\Node\ClassNode;
use Prophecy\Doubler\Generator\Node\MethodNode;

class ClassCodeGeneratorSpec extends ObjectBehavior
{
    public function it_generates_proper_php_code_for_specific_ClassNode(
        ClassNode $class,
        MethodNode $method1,
        MethodNode $method2,
        MethodNode $method3,
        MethodNode $method4,
        ArgumentNode $argument11,
        ArgumentNode $argument12,
        ArgumentNode $argument21,
        ArgumentNode $argument31
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_generates_proper_php_code_for_variadics(
        ClassNode $class,
        MethodNode $method1,
        MethodNode $method2,
        MethodNode $method3,
        MethodNode $method4,
        ArgumentNode $argument1,
        ArgumentNode $argument2,
        ArgumentNode $argument3,
        ArgumentNode $argument4
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_overrides_properly_methods_with_args_passed_by_reference(
        ClassNode $class,
        MethodNode $method,
        ArgumentNode $argument
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_generates_empty_class_for_empty_ClassNode(ClassNode $class)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_wraps_class_in_namespace_if_it_is_namespaced(ClassNode $class)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
