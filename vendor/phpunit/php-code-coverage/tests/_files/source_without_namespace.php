<?php
/**
 * Represents foo.
 */
class Foo
{
}

/**
 * @param mixed $bar
 */
function &foo($bar)
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
