<?php

namespace Guzzle\Tests\Common;

use Guzzle\Common\Event;
use Guzzle\Common\AbstractHasDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcher;

/**
 * @covers Guzzle\Common\AbstractHasDispatcher
 */
class AbstractHasAdapterTest extends \Guzzle\Tests\GuzzleTestCase
{
    public function testDoesNotRequireRegisteredEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testAllowsDispatcherToBeInjected()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testCreatesDefaultEventDispatcherIfNeeded()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testHelperDispatchesEvents()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testHelperAttachesSubscribers()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
