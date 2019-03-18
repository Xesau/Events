# Superceded by [Xesau/Plugins](https://www.github.com/Xesau/Plugins)

# Xesau\Events

Events is a lightweight library for event handling and hooks in PHP applications.

## Example

    /**
     * The event class
     */
    class MyEvent
    {
        // Uses the Event trait
        use Xesau\Event\Event;
        
        public function getName() {
            return 'my.event.name';
        }
        
        /**
         * Variables can be passed with the event object.
         */
        public $data = 'Not set';
        
        /**
         * It is common practice to specify the data in the constructor, though separate functions can be used as well.
         */
        public function __construct($data) {
            $this->data = $data;
        }
    }
    
    // Register listener for my.event.name 
    Xesau\Event\EventManager::listen('my.event.name', function($myEvent) {
        echo 'Event my.event.name called, data = ', $myEvent->data;
    }
    
    // Call the event.
    EventManager::call(new MyEvent('custom data'));
    // OUTPUT: Event my.event.name called, data = custom data
