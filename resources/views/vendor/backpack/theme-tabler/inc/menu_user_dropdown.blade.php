@php
    $user = backpack_user();
    $roleLabel = $user?->roles?->first()?->display_name
        ?: $user?->roles?->first()?->name
        ?: 'Usuário';
    $isTenantRole = str_starts_with($user?->roles?->first()?->name ?? '', 'tenant_');
    $avatarUrl = backpack_avatar_url($user);
@endphp

<div class="nav-item dropdown pe-3">
    <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Abrir menu do usuário">
        <span class="avatar avatar-sm rounded-circle">
            @if ($avatarUrl)
                <img class="avatar avatar-sm rounded-circle bg-transparent" src="{{ $avatarUrl }}"
                    alt="{{ $user->name }}" onerror="this.style.display='none'"
                    style="margin: 0;position: absolute;left: 0;z-index: 1;object-fit: cover;">
            @endif
            <span class="avatar avatar-sm rounded-circle backpack-avatar-menu-container text-center">
                {{ $user->getAttribute('name') ? mb_substr($user->name, 0, 1, 'UTF-8') : 'U' }}
            </span>
        </span>
        <div class="d-none d-xl-block ps-2">
            <div>{{ $user->name }}</div>
            <div class="mt-1 small {{ $isTenantRole ? 'text-success' : 'text-primary' }}">
                <i class="la {{ $isTenantRole ? 'la-building' : 'la-cloud' }} me-1"></i>{{ $roleLabel }}
            </div>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        @if (config('backpack.base.setup_my_account_routes'))
            <a href="{{ route('backpack.account.info') }}" class="dropdown-item"><i class="la la-user me-2"></i>{{ trans('backpack::base.my_account') }}</a>
            <div class="dropdown-divider"></div>
        @endif
        <a href="{{ backpack_url('logout') }}" class="dropdown-item"><i class="la la-lock me-2"></i>{{ trans('backpack::base.logout') }}</a>
    </div>
</div>
