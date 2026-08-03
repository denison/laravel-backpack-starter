<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Support\PermissionScope;
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
            ['name' => 'tenants.access', 'display_name' => 'Acessar Empresas'],
            ['name' => 'tenants.create', 'display_name' => 'Criar Empresa'],
            ['name' => 'tenants.edit', 'display_name' => 'Editar Empresa'],
            ['name' => 'tenants.delete', 'display_name' => 'Deletar Empresa'],
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

        $manager = Role::query()
            ->where('name', 'manager')
            ->where('guard_name', 'web')
            ->first();

        if (! $manager) {
            $manager = Role::query()
                ->where('name', 'admin')
                ->where('guard_name', 'web')
                ->first();
        }

        if ($manager) {
            $manager->forceFill([
                'name' => 'manager',
                'display_name' => 'Gestor da Plataforma',
            ])->save();
        } else {
            $manager = Role::create([
                'name' => 'manager',
                'display_name' => 'Gestor da Plataforma',
                'guard_name' => 'web',
            ]);
        }

        $administrative = Role::updateOrCreate(
            ['name' => 'administrative', 'guard_name' => 'web'],
            ['display_name' => 'Administrativo da Plataforma']
        );

        $tenantAdmin = Role::updateOrCreate(
            ['name' => 'tenant_admin', 'guard_name' => 'web'],
            ['display_name' => 'Gestor da Empresa']
        );

        $tenantAdministrative = Role::updateOrCreate(
            ['name' => 'tenant_administrative', 'guard_name' => 'web'],
            ['display_name' => 'Administrativo da Empresa']
        );

        $super->syncPermissions(Permission::query()->where('guard_name', 'web')->pluck('name')->all());

        $manager->syncPermissions([
            'users.access',
            'users.create',
            'users.edit',
            'users.delete',
            'tenants.access',
            'tenants.create',
            'tenants.edit',
            'tenants.delete',
            'activity_logs.access',
        ]);

        $administrative->syncPermissions([
            'tenants.access',
        ]);

        $tenantAdmin->syncPermissions([
            'users.access',
            'users.create',
            'users.edit',
            'users.delete',
        ]);

        $tenantAdministrative->syncPermissions([]);

        $userModel = config('backpack.permissionmanager.models.user');

        $userModel::query()
            ->whereHas('roles', function ($query) {
                $query->whereIn('name', ['tenant_admin', 'tenant_administrative']);
            })
            ->each(function ($user): void {
                $allowedDirectPermissions = $user->permissions
                    ->reject(fn ($permission) => PermissionScope::isPlatformOnly($permission->name))
                    ->pluck('id')
                    ->all();

                $user->syncPermissions($allowedDirectPermissions);
            });

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
