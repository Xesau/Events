<?php

namespace Xesau\Events;

class EventManager
{
    /**
     * @var callable[][] $listeners The event listeners
     */
    private static $listeners = array();

    /**
     * Registers a listener
     *
     * @param string $name    The event name to listen for
     * @param array  $handler The handler
     * @return void
     */
    public static function listen($name, callable $handler)
    {
        self::$listeners[$name][] = $handler;
    }

    /**
     * Call an event
     */
    public static function call(Event $event)
    {
        if (isset(self::$listeners[$event->getName()]))
            foreach(self::$listeners[$event->getName()] as $listener)
                $listener($event);
    }

}
