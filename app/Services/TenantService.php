<?php

namespace App\Services;

use App\Contracts\Repositories\TenantRepositoryInterface;
use App\Models\Tenant;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class TenantService
{
    public function __construct(
        private readonly TenantRepositoryInterface $tenants,
        private readonly ImageMediaService $images
    ) {}

    public function uniqueSlug(string $name): string
    {
        $baseSlug = Str::slug($name) ?: 'empresa';
        $slug = $baseSlug;
        $suffix = 2;

        while ($this->tenants->slugExists($slug)) {
            $slug = "{$baseSlug}-{$suffix}";
            $suffix++;
        }

        return $slug;
    }

    public function syncLogo(Tenant $tenant, ?UploadedFile $logo, bool $remove = false): void
    {
        $this->images->sync($tenant, 'logo', $logo, $remove);
    }
}
