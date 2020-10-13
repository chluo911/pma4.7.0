<?php
interface foo
{
}

class class_with_method_that_declares_anonymous_class
{
    public function method()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
