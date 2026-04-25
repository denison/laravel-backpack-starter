{{-- This file is used for menu items by any Backpack v7 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

@if (backpack_user()?->canAny(['users.access', 'roles.access', 'permissions.access']))
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" role="button" data-bs-auto-close="false" id="auth-menu">
            <i class="la la-lock nav-icon"></i> <span>Autenticação</span>
        </a>

        <div class="dropdown-menu" data-bs-popper="static" aria-labelledby="auth-menu">
            @if (backpack_user()?->can('users.access'))
                <a class="dropdown-item" href="{{ backpack_url('user') }}">
                    <i class="la la-user nav-icon"></i> <span>Usuários</span>
                </a>
            @endif

            @if (backpack_user()?->can('roles.access'))
                <a class="dropdown-item" href="{{ backpack_url('role') }}">
                    <i class="la la-users nav-icon"></i> <span>Papéis</span>
                </a>
            @endif

            @if (backpack_user()?->can('permissions.access'))
                <a class="dropdown-item" href="{{ backpack_url('permission') }}">
                    <i class="la la-key nav-icon"></i> <span>Permissões</span>
                </a>
            @endif
        </div>
    </li>
@endif
