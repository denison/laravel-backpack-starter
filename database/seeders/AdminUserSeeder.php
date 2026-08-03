<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $super = config('starter.seed.super');
        $manager = config('starter.seed.manager');

        $this->createUserWithRole(
            name: $super['name'],
            email: $super['email'],
            password: $super['password'],
            role: 'super',
        );

        $this->createUserWithRole(
            name: $manager['name'],
            email: $manager['email'],
            password: $manager['password'],
            role: 'manager',
        );
    }

    private function createUserWithRole(string $name, string $email, string $password, string $role): void
    {
        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => $password,
                'active' => true,
            ]
        );

        $user->syncRoles([$role]);
    }
}
