<?php

namespace Tests\Feature;

use App\Contracts\Repositories\UserRepositoryInterface;
use App\Models\Permission;
use App\Models\Role;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;
use Spatie\Permission\PermissionRegistrar;
use Tests\TestCase;

class AccountAndUserAccessTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        foreach ([
            'super' => 'Plataforma',
            'manager' => 'Gestor da Plataforma',
            'tenant_admin' => 'Gestor da Empresa',
            'tenant_administrative' => 'Administrativo da Empresa',
        ] as $name => $displayName) {
            Role::create([
                'name' => $name,
                'display_name' => $displayName,
                'guard_name' => 'web',
            ]);
        }

        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }

    public function test_inactive_user_is_logged_out_of_the_panel(): void
    {
        $user = User::factory()->create(['active' => false]);

        $this->actingAs($user, backpack_guard_name())
            ->get(backpack_url('dashboard'))
            ->assertRedirect(route('backpack.auth.login'));

        $this->assertGuest(backpack_guard_name());
    }

    public function test_user_from_inactive_tenant_is_logged_out_of_the_panel(): void
    {
        $tenant = $this->tenant('Empresa Inativa', '11222333000181', false);
        $user = User::factory()->create([
            'tenant_id' => $tenant->id,
            'active' => true,
        ]);

        $this->actingAs($user, backpack_guard_name())
            ->get(backpack_url('dashboard'))
            ->assertRedirect(route('backpack.auth.login'));

        $this->assertGuest(backpack_guard_name());
    }

    public function test_tenant_manager_only_sees_users_from_the_same_tenant(): void
    {
        $tenantA = $this->tenant('Empresa A', '11222333000181');
        $tenantB = $this->tenant('Empresa B', '11444777000161');

        $manager = $this->userWithRole('tenant_admin', $tenantA);
        $sameTenantUser = $this->userWithRole('tenant_administrative', $tenantA);
        $otherTenantUser = $this->userWithRole('tenant_administrative', $tenantB);
        $platformUser = $this->userWithRole('manager');

        $visibleIds = app(UserRepositoryInterface::class)
            ->applyVisibility(User::query(), $manager)
            ->pluck('id');

        $this->assertTrue($visibleIds->contains($manager->id));
        $this->assertTrue($visibleIds->contains($sameTenantUser->id));
        $this->assertFalse($visibleIds->contains($otherTenantUser->id));
        $this->assertFalse($visibleIds->contains($platformUser->id));
    }

    public function test_user_policy_blocks_records_from_another_tenant(): void
    {
        $tenantA = $this->tenant('Empresa A', '11222333000181');
        $tenantB = $this->tenant('Empresa B', '11444777000161');

        $manager = $this->userWithRole('tenant_admin', $tenantA);
        $sameTenantUser = $this->userWithRole('tenant_administrative', $tenantA);
        $otherTenantUser = $this->userWithRole('tenant_administrative', $tenantB);

        $this->assertTrue(Gate::forUser($manager)->allows('update', $sameTenantUser));
        $this->assertFalse(Gate::forUser($manager)->allows('update', $otherTenantUser));
    }

    public function test_hidden_tenant_record_redirects_to_previous_page(): void
    {
        $tenantA = $this->tenant('Empresa A', '11222333000181');
        $tenantB = $this->tenant('Empresa B', '11444777000161');
        $manager = $this->userWithRole('tenant_admin', $tenantA);
        $otherTenantUser = $this->userWithRole('tenant_administrative', $tenantB);
        $manager->givePermissionTo($this->permission('users.edit'));
        $previousUrl = backpack_url('user');

        $this->actingAs($manager, backpack_guard_name())
            ->withHeader('referer', $previousUrl)
            ->get(backpack_url("user/{$otherTenantUser->id}/edit"))
            ->assertRedirect($previousUrl);
    }

    public function test_user_status_can_be_changed_without_reloading_the_page(): void
    {
        $manager = $this->userWithRole('manager');
        $target = User::factory()->create(['active' => true]);
        $manager->givePermissionTo($this->permission('users.edit'));
        $this->assertTrue($manager->hasPermissionTo('users.edit'));

        $this->actingAs($manager, backpack_guard_name())
            ->withCsrfToken()
            ->patchJson(backpack_url("user/{$target->id}/active"), ['active' => false])
            ->assertOk()
            ->assertJsonPath('active', false);

        $this->assertFalse($target->refresh()->active);
    }

    public function test_tenant_manager_with_edit_permission_can_change_own_status(): void
    {
        $tenant = $this->tenant('Empresa A', '11222333000181');
        $manager = $this->userWithRole('tenant_admin', $tenant);
        $manager->givePermissionTo($this->permission('users.edit'));
        $this->assertTrue($manager->hasPermissionTo('users.edit'));

        $this->actingAs($manager, backpack_guard_name())
            ->withCsrfToken()
            ->patchJson(backpack_url("user/{$manager->id}/active"), ['active' => false])
            ->assertOk()
            ->assertJsonPath('active', false);

        $this->assertFalse($manager->refresh()->active);
    }

    public function test_tenant_status_can_be_changed_without_reloading_the_page(): void
    {
        $manager = $this->userWithRole('manager');
        $tenant = $this->tenant('Empresa A', '11222333000181');
        $manager->givePermissionTo($this->permission('tenants.edit'));
        $this->assertTrue($manager->hasPermissionTo('tenants.edit'));

        $this->actingAs($manager, backpack_guard_name())
            ->withCsrfToken()
            ->patchJson(backpack_url("tenant/{$tenant->id}/active"), ['active' => false])
            ->assertOk()
            ->assertJsonPath('active', false);

        $this->assertFalse($tenant->refresh()->active);
    }

    private function tenant(string $name, string $document, bool $active = true): Tenant
    {
        return Tenant::create([
            'name' => $name,
            'document_type' => 'cnpj',
            'document' => $document,
            'postal_code' => '01001000',
            'street' => 'Praça da Sé',
            'number' => '1',
            'district' => 'Sé',
            'city' => 'São Paulo',
            'state' => 'SP',
            'country_code' => 'BR',
            'active' => $active,
        ]);
    }

    private function withCsrfToken(): self
    {
        $token = Str::random(40);

        return $this
            ->withSession(['_token' => $token])
            ->withHeader('X-CSRF-TOKEN', $token);
    }

    private function userWithRole(string $role, ?Tenant $tenant = null): User
    {
        $user = User::factory()->create([
            'tenant_id' => $tenant?->id,
            'active' => true,
        ]);

        $user->assignRole($role);

        return $user;
    }

    private function permission(string $name): Permission
    {
        return Permission::create([
            'name' => $name,
            'display_name' => $name,
            'guard_name' => 'web',
        ]);
    }
}
