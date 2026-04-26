<?php

namespace App\Providers;

use App\Events\AdminNotificationRequested;
use App\Listeners\BroadcastAdminRealtimeNotification;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Event::listen(
            AdminNotificationRequested::class,
            BroadcastAdminRealtimeNotification::class,
        );
    }
}
