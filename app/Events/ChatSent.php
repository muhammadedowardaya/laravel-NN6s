<?php

namespace App\Events;

use App\Models\Chat;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatSent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $chat;
    /**
     * Create a new event instance.
     */
    public function __construct(Chat $chat)
    {
        //
        $this->chat = $chat;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    // public function broadcastOn(): array
    // {
    // return [
    //     new PrivateChannel('gorpratama'),
    // ];

    // }

    public function broadcastOn()
    {
        return new Channel('gorpratama');
    }
}
