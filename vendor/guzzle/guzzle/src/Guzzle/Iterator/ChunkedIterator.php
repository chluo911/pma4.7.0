<?php

namespace Guzzle\Iterator;

/**
 * Pulls out chunks from an inner iterator and yields the chunks as arrays
 */
class ChunkedIterator extends \IteratorIterator
{
    /** @var int Size of each chunk */
    protected $chunkSize;

    /** @var array Current chunk */
    protected $chunk;

    /**
     * @param \Traversable $iterator  Traversable iterator
     * @param int          $chunkSize Size to make each chunk
     * @throws \InvalidArgumentException
     */
    public function __construct(\Traversable $iterator, $chunkSize)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function rewind()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function next()
    {
        $this->chunk = array();
        for ($i = 0; $i < $this->chunkSize && parent::valid(); $i++) {
            $this->chunk[] = parent::current();
            parent::next();
        }
    }

    public function current()
    {
        return $this->chunk;
    }

    public function valid()
    {
        return (bool) $this->chunk;
    }
}
