<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SomeEvent
{
    use InteractsWithSockets, SerializesModels;
    public $user_id;



    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user_id)
    {
       $this->user_id=$user_id; //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
//        return new PrivateChannel('channel-name');
        return ["test-channel"];
    }
}
