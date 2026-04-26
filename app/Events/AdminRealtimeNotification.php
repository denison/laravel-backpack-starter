<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AdminRealtimeNotification implements ShouldBroadcast
{
    use Dispatchable;
    use SerializesModels;

    public function __construct(
        public readonly string $message,
        public readonly string $title = 'Sistema',
        public readonly string $type = 'info',
    ) {}

    public function broadcastQueue(): string
    {
        return 'broadcasts';
    }

    public function broadcastOn(): Channel
    {
        return new Channel('admin.notifications');
    }

    public function broadcastAs(): string
    {
        return 'admin.notification';
    }

    public function broadcastWith(): array
    {
        return [
            'title' => $this->title,
            'message' => $this->message,
            'type' => $this->type,
        ];
    }
}
