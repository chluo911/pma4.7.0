<?php

namespace Fixtures\Prophecy;

class WithReturnTypehints extends EmptyClass
{
    public function getSelf(): self
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getName(): string
    {
        return __CLASS__;
    }
    
    public function getParent(): parent
    {
        return $this;
    }
}
