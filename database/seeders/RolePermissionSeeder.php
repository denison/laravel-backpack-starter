<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        app(PermissionRegistrar::class)->forgetCachedPermissions();

        $permissions = [
            ['name' => 'permissions.access', 'display_name' => 'Acessar Permissão'],
            ['name' => 'permissions.create', 'display_name' => 'Criar Permissão'],
            ['name' => 'permissions.edit', 'display_name' => 'Editar Permissão'],
            ['name' => 'permissions.delete', 'display_name' => 'Deletar Permissão'],
            ['name' => 'roles.access', 'display_name' => 'Acessar Grupo'],
            ['name' => 'roles.create', 'display_name' => 'Criar Grupo'],
            ['name' => 'roles.edit', 'display_name' => 'Editar Grupo'],
            ['name' => 'roles.delete', 'display_name' => 'Deletar Grupo'],
            ['name' => 'users.access', 'display_name' => 'Acessar Usuário'],
            ['name' => 'users.create', 'display_name' => 'Criar Usuário'],
            ['name' => 'users.edit', 'display_name' => 'Editar Usuário'],
            ['name' => 'users.delete', 'display_name' => 'Deletar Usuário'],
            ['name' => 'activity_logs.access', 'display_name' => 'Acessar logs de atividade'],
        ];

        foreach ($permissions as $permission) {
            Permission::updateOrCreate(
                ['name' => $permission['name'], 'guard_name' => 'web'],
                ['display_name' => $permission['display_name']]
            );
        }

        $super = Role::updateOrCreate(
            ['name' => 'super', 'guard_name' => 'web'],
            ['display_name' => 'Plataforma']
        );

        $admin = Role::updateOrCreate(
            ['name' => 'admin', 'guard_name' => 'web'],
            ['display_name' => 'Administrador']
        );

        $super->syncPermissions(Permission::query()->where('guard_name', 'web')->pluck('name')->all());

        $admin->syncPermissions([
            'users.access',
            'users.create',
            'users.edit',
            'users.delete',
            'activity_logs.access',
        ]);

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
