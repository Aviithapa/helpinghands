<?php


namespace App\Events;

use App\Models\Website\Event;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EventApprove
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $event;

    /**
     * Create a new event instance.
     *
     * @param Event $event
     */
    public function __construct(Event $event)
    {
        $this->event = $event;
    }
}
