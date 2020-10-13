<?php

namespace Guzzle\Tests\Mock;

use Guzzle\Common\Event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MockObserver implements \Countable, EventSubscriberInterface
{
    public $events = array();

    public static function getSubscribedEvents()
    {
        return array();
    }

    public function has($eventName)
    {
        foreach ($this->events as $event) {
            if ($event->getName() == $eventName) {
                return true;
            }
        }

        return false;
    }

    public function getLastEvent()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function count()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    public function getGrouped()
    {
        $events = array();
        foreach ($this->events as $event) {
            if (!isset($events[$event->getName()])) {
                $events[$event->getName()] = array();
            }
            $events[$event->getName()][] = $event;
        }

        return $events;
    }

    public function getData($event, $key, $occurrence = 0)
    {
        $grouped = $this->getGrouped();
        if (isset($grouped[$event])) {
            return $grouped[$event][$occurrence][$key];
        }

        return null;
    }

    public function update(Event $event)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
