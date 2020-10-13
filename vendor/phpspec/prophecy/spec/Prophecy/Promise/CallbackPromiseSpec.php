<?php

namespace spec\Prophecy\Promise;

use PhpSpec\ObjectBehavior;
use Prophecy\Prophecy\MethodProphecy;
use Prophecy\Prophecy\ObjectProphecy;

class CallbackPromiseSpec extends ObjectBehavior
{
    public function let()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_is_promise()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_execute_closure_callback(ObjectProphecy $object, MethodProphecy $method)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_execute_static_array_callback(ObjectProphecy $object, MethodProphecy $method)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_execute_instance_array_callback(ObjectProphecy $object, MethodProphecy $method)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function it_should_execute_string_function_callback(ObjectProphecy $object, MethodProphecy $method)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * Class used to test callbackpromise
 *
 * @param array
 * @return string
 */
class ClassCallback
{
    /**
     * @param array $args
     */
    public function callbackMethod($args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param array $args
     */
    public static function staticCallbackMethod($args)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

/**
 * Callback function used to test callbackpromise
 *
 * @param array
 * @return string
 */
function functionCallbackFirstArgument($args)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
