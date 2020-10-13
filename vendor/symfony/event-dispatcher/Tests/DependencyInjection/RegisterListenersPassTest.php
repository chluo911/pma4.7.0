<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\EventDispatcher\Tests\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\EventDispatcher\DependencyInjection\RegisterListenersPass;

class RegisterListenersPassTest extends TestCase
{
    /**
     * Tests that event subscribers not implementing EventSubscriberInterface
     * trigger an exception.
     *
     * @expectedException \InvalidArgumentException
     */
    public function testEventSubscriberWithoutInterface()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testValidEventSubscriber()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The service "foo" must be public as event listeners are lazy-loaded.
     */
    public function testPrivateEventListener()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The service "foo" must be public as event subscribers are lazy-loaded.
     */
    public function testPrivateEventSubscriber()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The service "foo" must not be abstract as event listeners are lazy-loaded.
     */
    public function testAbstractEventListener()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage The service "foo" must not be abstract as event subscribers are lazy-loaded.
     */
    public function testAbstractEventSubscriber()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function testEventSubscriberResolvableClassName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage You have requested a non-existent parameter "subscriber.class"
     */
    public function testEventSubscriberUnresolvableClassName()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}

class SubscriberService implements \Symfony\Component\EventDispatcher\EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
    }
}
