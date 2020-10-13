<?php
class TestIterator implements Iterator
{
    protected $array;
    protected $position = 0;

    public function __construct($array = array())
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid()
    {
        return $this->position < count($this->array);
    }

    public function key()
    {
        return $this->position;
    }

    public function current()
    {
        return $this->array[$this->position];
    }

    public function next()
    {
        $this->position++;
    }
}
