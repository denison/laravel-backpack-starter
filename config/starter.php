<?php

return [
    'seed' => [
        'super' => [
            'name' => env('SEED_SUPER_NAME', 'Super Admin'),
            'email' => env('SEED_SUPER_EMAIL', 'super@example.com'),
            'password' => env('SEED_SUPER_PASSWORD', 'password'),
        ],

        'manager' => [
            'name' => env('SEED_MANAGER_NAME', env('SEED_ADMIN_NAME', 'Platform Manager')),
            'email' => env('SEED_MANAGER_EMAIL', env('SEED_ADMIN_EMAIL', 'manager@example.com')),
            'password' => env('SEED_MANAGER_PASSWORD', env('SEED_ADMIN_PASSWORD', 'password')),
        ],
    ],
];
