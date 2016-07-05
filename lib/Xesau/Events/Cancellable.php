<?php

namespace Xesau\Events;

trait Cancellable
{

    private $cancelled = false;

    public function setCancelled($cancelled)
    {
        $this->cancelled = ($cancelled == true);
    }

    public function isCancelled()
    {
        return $this->cancelled;
    }

}
