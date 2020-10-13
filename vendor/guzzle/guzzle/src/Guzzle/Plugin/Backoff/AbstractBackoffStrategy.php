<?php

namespace Guzzle\Plugin\Backoff;

use Guzzle\Http\Message\RequestInterface;
use Guzzle\Http\Message\Response;
use Guzzle\Http\Exception\HttpException;

/**
 * Abstract backoff strategy that allows for a chain of responsibility
 */
abstract class AbstractBackoffStrategy implements BackoffStrategyInterface
{
    /** @var AbstractBackoffStrategy Next strategy in the chain */
    protected $next;

    /** @param AbstractBackoffStrategy $next Next strategy in the chain */
    public function setNext(AbstractBackoffStrategy $next)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Get the next backoff strategy in the chain
     *
     * @return AbstractBackoffStrategy|null
     */
    public function getNext()
    {
        return $this->next;
    }

    public function getBackoffPeriod(
        $retries,
        RequestInterface $request,
        Response $response = null,
        HttpException $e = null
    ) {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Check if the strategy does filtering and makes decisions on whether or not to retry.
     *
     * Strategies that return false will never retry if all of the previous strategies in a chain defer on a backoff
     * decision.
     *
     * @return bool
     */
    abstract public function makesDecision();

    /**
     * Implement the concrete strategy
     *
     * @param int              $retries  Number of retries of the request
     * @param RequestInterface $request  Request that was sent
     * @param Response         $response Response that was received. Note that there may not be a response
     * @param HttpException    $e        Exception that was encountered if any
     *
     * @return bool|int|null Returns false to not retry or the number of seconds to delay between retries. Return true
     *                       or null to defer to the next strategy if available, and if not, return 0.
     */
    abstract protected function getDelay(
        $retries,
        RequestInterface $request,
        Response $response = null,
        HttpException $e = null
    );
}
