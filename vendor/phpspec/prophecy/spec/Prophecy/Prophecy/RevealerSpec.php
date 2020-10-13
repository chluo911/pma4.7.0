<?php

namespace spec\Prophecy\Prophecy;

use PhpSpec\ObjectBehavior;
use Prophecy\Prophecy\ProphecyInterface;

class RevealerSpec extends ObjectBehavior
{
    public function it_is_revealer()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_reveals_single_instance_of_ProphecyInterface(ProphecyInterface $prophecy, \stdClass $object)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_reveals_instances_of_ProphecyInterface_inside_array(
        ProphecyInterface $prophecy1,
        ProphecyInterface $prophecy2,
        \stdClass $object1,
        \stdClass $object2
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_does_not_touch_non_prophecy_interface()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
