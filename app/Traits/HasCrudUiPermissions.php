<?php

namespace App\Traits;

trait HasCrudUiPermissions
{
    protected function applyCrudUiPermissions(string $resource): void
    {
        $user = backpack_user();

        if (! $user || ! isset($this->crud)) {
            return;
        }

        $map = [
            'list' => 'access',
            'show' => 'access',
            'create' => 'create',
            'update' => 'edit',
            'delete' => 'delete',
            'bulkDelete' => 'delete',
        ];

        foreach ($map as $operation => $action) {
            if (! $user->can("{$resource}.{$action}")) {
                $this->crud->denyAccess($operation);
            }
        }
    }
}
