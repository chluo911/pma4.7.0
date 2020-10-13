<?php

namespace spec\Prophecy\Doubler\Generator;

use PhpSpec\ObjectBehavior;
use Prophecy\Doubler\Generator\ClassCodeGenerator;
use Prophecy\Doubler\Generator\Node\ClassNode;

class ClassCreatorSpec extends ObjectBehavior
{
    public function let(ClassCodeGenerator $generator)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_evaluates_code_generated_by_ClassCodeGenerator($generator, ClassNode $class)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_throws_an_exception_if_class_does_not_exist_after_evaluation($generator, ClassNode $class)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
