<?php

return [
    'seed' => [
        'super' => [
            'name' => env('SEED_SUPER_NAME', 'Super Admin'),
            'email' => env('SEED_SUPER_EMAIL', 'super@example.com'),
            'password' => env('SEED_SUPER_PASSWORD', 'password'),
        ],

        'admin' => [
            'name' => env('SEED_ADMIN_NAME', 'Admin'),
            'email' => env('SEED_ADMIN_EMAIL', 'admin@example.com'),
            'password' => env('SEED_ADMIN_PASSWORD', 'password'),
        ],
    ],
];
