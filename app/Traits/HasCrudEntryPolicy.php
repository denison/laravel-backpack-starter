<?php

namespace App\Traits;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

trait HasCrudEntryPolicy
{
    protected function applyCrudEntryPolicy(string $modelClass): void
    {
        $this->middleware(function (Request $request, Closure $next) use ($modelClass) {
            $ability = match ($request->route()?->getActionMethod()) {
                'show' => 'view',
                'edit', 'update' => 'update',
                'destroy' => 'delete',
                default => null,
            };

            $entryId = $request->route('id');

            if ($ability && $entryId) {
                $entry = $modelClass::query()->findOrFail($entryId);
                Gate::forUser(backpack_user())->authorize($ability, $entry);
            }

            return $next($request);
        })->only(['show', 'edit', 'update', 'destroy']);
    }
}
