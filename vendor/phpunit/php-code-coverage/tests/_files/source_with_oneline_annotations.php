<?php

/** Docblock */
interface Foo
{
    public function bar();
}

class Foo
{
    public function bar()
    {
    }
}

function baz()
{
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
}
