{{-- This file is used for menu items by any Backpack v7 theme --}}
@php
    $routePrefix = trim(config('backpack.base.route_prefix', 'app'), '/');
    $isCompanyAdministrator = backpack_user()?->hasAnyRole(['tenant_admin', 'tenant_administrative']) ?? false;
    $companyContext = request()->routeIs('backpack.company.*');
    $companyDashboardActive = request()->routeIs('backpack.company.dashboard');
    $dashboardActive = request()->routeIs('backpack.dashboard');
    $usersActive = request()->is("{$routePrefix}/user*")
        || request()->is("{$routePrefix}/company/user*");
    $rolesActive = request()->is("{$routePrefix}/role*");
    $permissionsActive = request()->is("{$routePrefix}/permission*");
    $authActive = $usersActive || $rolesActive || $permissionsActive;
    $activityLogsActive = request()->is("{$routePrefix}/activity-log*");
    $tenantsActive = request()->is("{$routePrefix}/tenant*");
@endphp

@if ($companyContext)
    <li class="nav-item">
        <a class="nav-link {{ $companyDashboardActive ? 'active' : '' }}" href="{{ route('backpack.company.dashboard') }}" @if ($companyDashboardActive) aria-current="page" @endif>
            <i class="la la-home nav-icon"></i> <span>{{ trans('backpack::base.dashboard') }}</span>
        </a>
    </li>

    @if (backpack_user()?->can('users.access'))
        <li class="nav-item">
            <a class="nav-link {{ $usersActive ? 'active' : '' }}" href="{{ backpack_url('company/user') }}" @if ($usersActive) aria-current="page" @endif>
                <i class="la la-user nav-icon"></i> <span>Usuários</span>
            </a>
        </li>
    @endif

    @unless ($isCompanyAdministrator)
        <li class="nav-item">
            <form method="POST" action="{{ route('backpack.company.context.destroy') }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="nav-link border-0 bg-transparent w-100 text-start">
                    <i class="la la-arrow-left nav-icon"></i> <span>Voltar para a plataforma</span>
                </button>
            </form>
        </li>
    @endunless
@else
    <li class="nav-item">
        <a class="nav-link {{ $dashboardActive ? 'active' : '' }}" href="{{ backpack_url('dashboard') }}" @if ($dashboardActive) aria-current="page" @endif>
            <i class="la la-home nav-icon"></i> <span>{{ trans('backpack::base.dashboard') }}</span>
        </a>
    </li>

@if (backpack_user()?->canAny(['users.access', 'roles.access', 'permissions.access']))
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle {{ $authActive ? 'active' : '' }}" href="#" data-bs-toggle="dropdown" role="button" data-bs-auto-close="false" id="auth-menu" aria-expanded="{{ $authActive ? 'true' : 'false' }}">
            <i class="la la-lock nav-icon"></i> <span>Autenticação</span>
        </a>

        <div class="dropdown-menu {{ $authActive ? 'show' : '' }}" data-bs-popper="static" aria-labelledby="auth-menu">
            @if (backpack_user()?->can('users.access'))
                <a class="dropdown-item {{ $usersActive ? 'active' : '' }}" href="{{ backpack_url('user') }}" @if ($usersActive) aria-current="page" @endif>
                    <i class="la la-user nav-icon"></i> <span>Usuários</span>
                </a>
            @endif

            @if (backpack_user()?->can('roles.access'))
                <a class="dropdown-item {{ $rolesActive ? 'active' : '' }}" href="{{ backpack_url('role') }}" @if ($rolesActive) aria-current="page" @endif>
                    <i class="la la-users nav-icon"></i> <span>Papéis</span>
                </a>
            @endif

            @if (backpack_user()?->can('permissions.access'))
                <a class="dropdown-item {{ $permissionsActive ? 'active' : '' }}" href="{{ backpack_url('permission') }}" @if ($permissionsActive) aria-current="page" @endif>
                    <i class="la la-key nav-icon"></i> <span>Permissões</span>
                </a>
            @endif
        </div>
    </li>
@endif

@if (backpack_user()?->can('activity_logs.access'))
    <li class="nav-item">
        <a class="nav-link {{ $activityLogsActive ? 'active' : '' }}" href="{{ backpack_url('activity-log') }}" @if ($activityLogsActive) aria-current="page" @endif>
            <i class="la la-history nav-icon"></i> <span>Auditoria</span>
        </a>
    </li>
@endif

@if (backpack_user()?->can('tenants.access'))
    <x-backpack::menu-item title="Empresas" icon="la la-building" :link="backpack_url('tenant')" class="{{ $tenantsActive ? 'active' : '' }}" aria-current="{{ $tenantsActive ? 'page' : 'false' }}" />
@endif
@endif
