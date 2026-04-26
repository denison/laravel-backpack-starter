<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $super = config('starter.seed.super');
        $admin = config('starter.seed.admin');

        $this->createUserWithRole(
            name: $super['name'],
            email: $super['email'],
            password: $super['password'],
            role: 'super',
        );

        $this->createUserWithRole(
            name: $admin['name'],
            email: $admin['email'],
            password: $admin['password'],
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
