<?php

namespace Botble\Gallery\Events;

use Event;
use Illuminate\Queue\SerializesModels;

class GalleryBoxEvent extends Event
{
    use SerializesModels;

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     * @author Sang Nguyen
     */
    public function broadcastOn()
    {
        return [];
    }
}
