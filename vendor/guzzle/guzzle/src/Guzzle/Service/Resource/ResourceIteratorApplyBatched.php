<?php

namespace Guzzle\Service\Resource;

use Guzzle\Common\AbstractHasDispatcher;
use Guzzle\Batch\BatchBuilder;
use Guzzle\Batch\BatchSizeDivisor;
use Guzzle\Batch\BatchClosureTransfer;
use Guzzle\Common\Version;

/**
 * Apply a callback to the contents of a {@see ResourceIteratorInterface}
 * @deprecated Will be removed in a future version and is no longer maintained. Use the Batch\ abstractions instead.
 * @codeCoverageIgnore
 */
class ResourceIteratorApplyBatched extends AbstractHasDispatcher
{
    /** @var callable|array */
    protected $callback;

    /** @var ResourceIteratorInterface */
    protected $iterator;

    /** @var integer Total number of sent batches */
    protected $batches = 0;

    /** @var int Total number of iterated resources */
    protected $iterated = 0;

    public static function getAllEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @param ResourceIteratorInterface $iterator Resource iterator to apply a callback to
     * @param array|callable            $callback Callback method accepting the resource iterator
     *                                            and an array of the iterator's current resources
     */
    public function __construct(ResourceIteratorInterface $iterator, $callback)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Apply the callback to the contents of the resource iterator
     *
     * @param int $perBatch The number of records to group per batch transfer
     *
     * @return int Returns the number of iterated resources
     */
    public function apply($perBatch = 50)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the total number of batches sent
     *
     * @return int
     */
    public function getBatchCount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the total number of iterated resources
     *
     * @return int
     */
    public function getIteratedCount()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
