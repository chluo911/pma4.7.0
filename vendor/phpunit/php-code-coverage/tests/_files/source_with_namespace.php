<?php
namespace bar\baz;

/**
 * Represents foo.
 */
class source_with_namespace
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
