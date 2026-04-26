<?php

use App\Events\AdminNotificationRequested;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('admin:notify {message=Teste realtime do painel admin} {--title=Sistema} {--type=info}', function () {
    AdminNotificationRequested::dispatch(
        message: (string) $this->argument('message'),
        title: (string) $this->option('title'),
        type: (string) $this->option('type'),
    );

    $this->info('Notificacao realtime enviada para o painel admin.');
})->purpose('Send a realtime Noty notification to the admin panel');
