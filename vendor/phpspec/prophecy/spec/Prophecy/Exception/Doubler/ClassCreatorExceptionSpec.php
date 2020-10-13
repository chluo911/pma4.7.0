<?php

namespace spec\Prophecy\Exception\Doubler;

use PhpSpec\ObjectBehavior;
use Prophecy\Doubler\Generator\Node\ClassNode;
use spec\Prophecy\Exception\Prophecy;

class ClassCreatorExceptionSpec extends ObjectBehavior
{
    public function let(ClassNode $node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_is_a_prophecy_exception()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_contains_a_reflected_node($node)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
