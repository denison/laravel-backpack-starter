<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $this->createUserWithRole(
            name: env('SEED_SUPER_NAME', 'Super Admin'),
            email: env('SEED_SUPER_EMAIL', 'super@example.com'),
            password: env('SEED_SUPER_PASSWORD', 'password'),
            role: 'super',
        );

        $this->createUserWithRole(
            name: env('SEED_ADMIN_NAME', 'Admin'),
            email: env('SEED_ADMIN_EMAIL', 'admin@example.com'),
            password: env('SEED_ADMIN_PASSWORD', 'password'),
            role: 'admin',
        );
    }

    private function createUserWithRole(string $name, string $email, string $password, string $role): void
    {
        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make($password),
            ]
        );

        $user->syncRoles([$role]);
    }
}
