<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AdminNotificationRequested
{
    use Dispatchable;
    use SerializesModels;

    public function __construct(
        public readonly string $message,
        public readonly string $title = 'Sistema',
        public readonly string $type = 'info',
    ) {}
}
