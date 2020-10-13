<?php

namespace Guzzle\Common;

use Symfony\Component\EventDispatcher\Event as SymfonyEvent;

/**
 * Default event for Guzzle notifications
 */
class Event extends SymfonyEvent implements ToArrayInterface, \ArrayAccess, \IteratorAggregate
{
    /** @var array */
    private $context;

    /**
     * @param array $context Contextual information
     */
    public function __construct(array $context = array())
    {
        $this->context = $context;
    }

    public function getIterator()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function offsetGet($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function offsetSet($offset, $value)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function offsetExists($offset)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function offsetUnset($offset)
    {
        unset($this->context[$offset]);
    }

    public function toArray()
    {
        return $this->context;
    }
}
