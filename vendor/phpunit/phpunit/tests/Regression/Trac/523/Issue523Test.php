<?php
class Issue523Test extends PHPUnit_Framework_TestCase
{
    public function testAttributeEquals()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
};

class Issue523 extends ArrayIterator
{
    protected $field = 'foo';
}
