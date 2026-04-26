<?php

namespace App\Listeners;

use App\Events\AdminNotificationRequested;
use App\Events\AdminRealtimeNotification;
use Illuminate\Contracts\Queue\ShouldQueue;

class BroadcastAdminRealtimeNotification implements ShouldQueue
{
    public string $connection = 'redis';

    public string $queue = 'default';

    public function handle(AdminNotificationRequested $event): void
    {
        AdminRealtimeNotification::dispatch(
            message: $event->message,
            title: $event->title,
            type: $event->type,
        );
    }
}
