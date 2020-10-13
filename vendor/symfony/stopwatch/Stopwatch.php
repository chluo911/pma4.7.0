<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Stopwatch;

/**
 * Stopwatch provides a way to profile code.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Stopwatch
{
    /**
     * @var Section[]
     */
    private $sections;

    /**
     * @var Section[]
     */
    private $activeSections;

    public function __construct()
    {
        $this->sections = $this->activeSections = array('__root__' => new Section('__root__'));
    }

    /**
     * @return Section[]
     */
    public function getSections()
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Creates a new section or re-opens an existing section.
     *
     * @param string|null $id The id of the session to re-open, null to create a new one
     *
     * @throws \LogicException When the section to re-open is not reachable
     */
    public function openSection($id = null)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Stops the last started section.
     *
     * The id parameter is used to retrieve the events from this section.
     *
     * @see getSectionEvents()
     *
     * @param string $id The identifier of the section
     *
     * @throws \LogicException When there's no started section to be stopped
     */
    public function stopSection($id)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Starts an event.
     *
     * @param string $name     The event name
     * @param string $category The event category
     *
     * @return StopwatchEvent
     */
    public function start($name, $category = null)
    {
        return end($this->activeSections)->startEvent($name, $category);
    }

    /**
     * Checks if the event was started.
     *
     * @param string $name The event name
     *
     * @return bool
     */
    public function isStarted($name)
    {
        return end($this->activeSections)->isEventStarted($name);
    }

    /**
     * Stops an event.
     *
     * @param string $name The event name
     *
     * @return StopwatchEvent
     */
    public function stop($name)
    {
        return end($this->activeSections)->stopEvent($name);
    }

    /**
     * Stops then restarts an event.
     *
     * @param string $name The event name
     *
     * @return StopwatchEvent
     */
    public function lap($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Returns a specific event by name.
     *
     * @param string $name The event name
     *
     * @return StopwatchEvent
     */
    public function getEvent($name)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }

    /**
     * Gets all events for a given section.
     *
     * @param string $id A section identifier
     *
     * @return StopwatchEvent[]
     */
    public function getSectionEvents($id)
    {
$trace = debug_backtrace();
	  error_log(__FILE__);
	  error_log(__FUNCTION__);
     error_log( print_r( $trace, true ));
	  die();
    }
}
