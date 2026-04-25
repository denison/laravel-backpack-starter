<?php

namespace App\Traits;

trait HasCrudRoutePermissions
{
    protected function applyCrudRoutePermissions(string $resource): void
    {
        $this->middleware("check.permission:{$resource}.access")
            ->only(['index', 'show']);

        $this->middleware("check.permission:{$resource}.create")
            ->only(['create', 'store']);

        $this->middleware("check.permission:{$resource}.edit")
            ->only(['edit', 'update']);

        $this->middleware("check.permission:{$resource}.delete")
            ->only(['destroy']);
    }
}
