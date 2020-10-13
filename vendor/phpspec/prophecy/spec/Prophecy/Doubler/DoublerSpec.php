<?php

namespace spec\Prophecy\Doubler;

use PhpSpec\ObjectBehavior;
use Prophecy\Doubler\ClassPatch\ClassPatchInterface;
use Prophecy\Doubler\Generator\ClassCreator;
use Prophecy\Doubler\Generator\ClassMirror;
use Prophecy\Doubler\Generator\Node\ClassNode;
use Prophecy\Doubler\NameGenerator;

class DoublerSpec extends ObjectBehavior
{
    public function let(ClassMirror $mirror, ClassCreator $creator, NameGenerator $namer)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_have_patches_by_default()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_registerClassPatch_adds_a_patch_to_the_doubler(ClassPatchInterface $patch)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_getClassPatches_sorts_patches_by_priority(
        ClassPatchInterface $alt1,
        ClassPatchInterface $alt2,
        ClassPatchInterface $alt3,
        ClassPatchInterface $alt4
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function its_double_mirrors_alterates_and_instantiates_provided_class(
        $mirror,
        $creator,
        $namer,
        ClassPatchInterface $alt1,
        ClassPatchInterface $alt2,
        \ReflectionClass $class,
        \ReflectionClass $interface1,
        \ReflectionClass $interface2,
        ClassNode $node
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_double_instantiates_a_class_with_constructor_argument(
        $mirror,
        \ReflectionClass $class,
        ClassNode $node,
        $namer
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_can_instantiate_class_with_final_constructor(
        $mirror,
        \ReflectionClass $class,
        ClassNode $node,
        $namer
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class WithFinalConstructor
{
    final public function __construct()
    {
    }
}
