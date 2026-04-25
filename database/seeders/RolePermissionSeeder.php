<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    public function run()
    {
        DB::beginTransaction();
        
        try{
            // Criando permissões básicas
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
            ];

            foreach ($permissions as $permission) {
                Permission::firstOrCreate(
                    ['name' => $permission['name']],
                    ['display_name' => $permission['display_name'], 'guard_name' => 'web']
                );
            }
    
            // Criando as Roles
            // super = Técnico/Dev (configurações técnicas, roles, permissions)
            $super = Role::firstOrCreate(['name' => 'super'], ['display_name' => 'Plataforma']);
    
           
            // Definindo permissões por role com guard_name 'web'
            $super->syncPermissions([
                'permissions.access', 'permissions.create', 'permissions.edit', 'permissions.delete', 
                'roles.access', 'roles.create', 'roles.edit', 'roles.delete', 
                'users.access', 'users.create', 'users.edit', 'users.delete', 
            ]);

            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            dd($e);
        }

    }
}
