@extends(backpack_view('blank'))

@php
    $defaultBreadcrumbs = [
        trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
        $crud->entity_name_plural => url($crud->route),
        trans('backpack::crud.preview') => false,
    ];

    $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;

    $columns = collect($crud->columns())
        ->reject(fn ($column) => ($column['type'] ?? null) === 'hidden')
        ->values();

    $metadataNames = ['created_at', 'updated_at', 'deleted_at'];

    $metadataColumns = $columns
        ->filter(fn ($column) => in_array($column['name'] ?? null, $metadataNames, true))
        ->values();

    $mainColumns = $columns
        ->reject(fn ($column) => in_array($column['name'] ?? null, $metadataNames, true))
        ->values();

    /*
     |--------------------------------------------------------------------------
     | Detecta se é CRUD de usuários
     |--------------------------------------------------------------------------
     */
    $crudRoute = trim($crud->route ?? '', '/');

    $isUsersCrud = str_contains($crudRoute, 'user')
        || str_contains($crudRoute, 'users')
        || in_array($crud->entity_name ?? null, ['user', 'usuario', 'usuário'], true)
        || in_array($crud->entity_name_plural ?? null, ['users', 'usuarios', 'usuários'], true);

    /*
     |--------------------------------------------------------------------------
     | Campos principais do layout genérico
     |--------------------------------------------------------------------------
     */
    $summaryNames = [
        'name',
        'nome',
        'title',
        'titulo',
        'email',
        'phone',
        'telefone',
        'status',
        'active',
        'is_active',
    ];

    $summaryColumns = $mainColumns
        ->filter(fn ($column) => in_array($column['name'] ?? null, $summaryNames, true))
        ->take(3)
        ->values();

    if ($summaryColumns->isEmpty()) {
        $summaryColumns = $mainColumns->take(2)->values();
    }

    $summaryColumnNames = $summaryColumns
        ->pluck('name')
        ->filter()
        ->all();

    $detailColumns = $mainColumns
        ->reject(fn ($column) => in_array($column['name'] ?? null, $summaryColumnNames, true))
        ->values();

    /*
     |--------------------------------------------------------------------------
     | Avatar
     |--------------------------------------------------------------------------
     */
    $avatarSource = strip_tags((string) data_get($entry, 'name', data_get($entry, 'nome', $crud->entity_name)));
    $avatarInitial = mb_strtoupper(mb_substr(trim($avatarSource) ?: $crud->entity_name, 0, 1));

    /*
     |--------------------------------------------------------------------------
     | Dados especiais para users
     |--------------------------------------------------------------------------
     */
    $userName = data_get($entry, 'name', data_get($entry, 'nome', ''));
    $userEmail = data_get($entry, 'email', '');

    $userIsActive = true;

    if (isset($entry->active)) {
        $userIsActive = (bool) $entry->active;
    } elseif (isset($entry->is_active)) {
        $userIsActive = (bool) $entry->is_active;
    }

    $userRoles = collect();

    if (method_exists($entry, 'roles')) {
        try {
            $userRoles = $entry->roles ?? collect();
        } catch (\Throwable $e) {
            $userRoles = collect();
        }
    }

    $userRoleNames = $userRoles
        ->map(fn ($role) => $role->display_name ?? $role->name ?? null)
        ->filter()
        ->values();

    $rolePermissions = collect();

    $userRoles->each(function ($role) use (&$rolePermissions) {
        if (isset($role->permissions)) {
            $rolePermissions = $rolePermissions->merge($role->permissions);
        }
    });

    $directPermissions = collect();

    if (method_exists($entry, 'permissions')) {
        try {
            $directPermissions = $entry->permissions ?? collect();
        } catch (\Throwable $e) {
            $directPermissions = collect();
        }
    }

    $userPermissions = $rolePermissions
        ->merge($directPermissions)
        ->unique(function ($permission) {
            return $permission->id ?? $permission->name ?? spl_object_id($permission);
        })
        ->values();

    $userPermissionLabels = $userPermissions
        ->map(fn ($permission) => $permission->display_name ?? $permission->name ?? null)
        ->filter()
        ->values();
@endphp


@section('header')
    <div class="container-fluid d-flex justify-content-between my-3">
        <section class="header-operation animated fadeIn d-flex mb-2 align-items-baseline d-print-none" bp-section="page-header">
            <h1 class="text-capitalize mb-0" bp-section="page-heading">
                {!! $crud->getHeading() ?? $crud->entity_name_plural !!}
            </h1>

            <p class="ms-2 ml-2 mb-0" bp-section="page-subheading">
                {!! $crud->getSubheading() ?? mb_ucfirst(trans('backpack::crud.preview')).' '.$crud->entity_name !!}
            </p>
        </section>

        <a href="javascript: window.print();" class="btn float-end float-right d-print-none">
            <i class="la la-print"></i>
        </a>
    </div>
@endsection

@section('content')
    <div class="row modern-show" bp-section="crud-operation-show">
        <div class="{{ $crud->getShowContentClass() }}">
            @if ($crud->model->translationEnabled())
                <div class="row">
                    <div class="col-md-12 mb-3" bp-section="show-operation-language-dropdown">
                        <div class="btn-group float-end float-right">
                            <button type="button"
                                    class="btn btn-sm btn-primary dropdown-toggle"
                                    data-toggle="dropdown"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                {{ trans('backpack::crud.language') }}:
                                {{ $crud->model->getAvailableLocales()[request()->input('_locale') ? request()->input('_locale') : App::getLocale()] }}
                                &nbsp; <span class="caret"></span>
                            </button>

                            <ul class="dropdown-menu">
                                @foreach ($crud->model->getAvailableLocales() as $key => $locale)
                                    <a class="dropdown-item"
                                       href="{{ url($crud->route.'/'.$entry->getKey().'/show') }}?_locale={{ $key }}">
                                        {{ $locale }}
                                    </a>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            @if ($crud->hasAccess('list') || $crud->buttons()->where('stack', 'line')->count())
                <div class="modern-show-actions d-print-none">
                    @if ($crud->hasAccess('list'))
                        <a href="{{ url($crud->route) }}" class="btn btn-outline-secondary">
                            <i class="la la-arrow-left"></i>
                            {{ trans('backpack::crud.back_to_all') }} {{ $crud->entity_name_plural }}
                        </a>
                    @endif

                    @include('crud::inc.button_stack', ['stack' => 'line'])
                </div>
            @endif

            @if ($crud->tabsEnabled() && count($crud->getUniqueTabNames('columns')))
                <div class="modern-show-card modern-show-tabs">
                    @include('crud::inc.show_tabbed_table')
                </div>
            @else
                @if ($isUsersCrud)
                    {{-- Layout especial para Usuários --}}
                    <div class="modern-show-card modern-user-profile-card">
                        <div class="modern-user-profile-grid">
                            <div class="modern-user-avatar">
                                {{ $avatarInitial }}
                            </div>

                            <div class="modern-user-profile-main">
                                <h2 class="modern-show-section-title">
                                    <i class="la la-user"></i>
                                    Perfil
                                </h2>

                                <div class="modern-user-info-grid">
                                    <div class="modern-user-info-item">
                                        <div class="modern-show-label">Nome</div>
                                        <div class="modern-show-value">
                                            {{ $userName ?: '-' }}
                                        </div>
                                    </div>

                                    <div class="modern-user-info-item">
                                        <div class="modern-show-label">E-mail</div>
                                        <div class="modern-show-value">
                                            {{ $userEmail ?: '-' }}
                                        </div>
                                    </div>

                                    <div class="modern-user-info-item">
                                        <div class="modern-show-label">Status</div>
                                        <div class="modern-show-value">
                                            <span class="modern-user-status {{ $userIsActive ? '' : 'is-inactive' }}">
                                                <span class="modern-user-status-dot"></span>
                                                {{ $userIsActive ? 'Ativo' : 'Inativo' }}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modern-user-grid">
                        <div class="modern-show-card modern-user-panel">
                            <h2 class="modern-show-section-title">
                                <i class="la la-user-shield"></i>
                                Grupo e Permissões
                            </h2>

                            <div class="modern-user-panel-row">
                                <div class="modern-show-label">Grupo de Usuário</div>

                                <div class="modern-show-value">
                                    @if ($userRoleNames->count())
                                        <div class="modern-user-role-list">
                                            @foreach ($userRoleNames as $roleName)
                                                <span class="modern-user-role-badge">
                                                    <i class="la la-users"></i>
                                                    {{ $roleName }}
                                                </span>
                                            @endforeach
                                        </div>
                                    @else
                                        -
                                    @endif
                                </div>
                            </div>

                            <div class="modern-user-panel-row">
                                <div class="modern-show-label">Permissões</div>

                                @if ($userPermissionLabels->count())
                                    <div class="modern-user-permission-list">
                                        @foreach ($userPermissionLabels as $permissionLabel)
                                            <span class="modern-user-chip">
                                                <i class="la la-key"></i>
                                                {{ $permissionLabel }}
                                            </span>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="modern-show-empty">
                                        Nenhuma permissão vinculada.
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="modern-show-card modern-user-panel">
                            <h2 class="modern-show-section-title">
                                <i class="la la-calendar"></i>
                                Metadados
                            </h2>

                            @forelse ($metadataColumns as $column)
                                <div class="modern-user-meta-item">
                                    <div class="modern-user-meta-icon">
                                        <i class="la la-calendar"></i>
                                    </div>

                                    <div>
                                        <div class="modern-show-label">
                                            {!! $column['label'] !!}
                                        </div>

                                        <div class="modern-show-value">
                                            @includeFirst(
                                                \Backpack\CRUD\ViewNamespaces::getViewPathsWithFallbackFor(
                                                    'columns',
                                                    $column['type'],
                                                    'crud::columns.text'
                                                )
                                            )
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="modern-show-empty">
                                    Sem metadados para exibir.
                                </div>
                            @endforelse
                        </div>
                    </div>
                @else
                    {{-- Layout genérico para os demais CRUDs --}}
                    <div class="modern-show-card modern-show-summary">
                        <div class="modern-show-summary-content">
                            <div class="modern-show-avatar">
                                {{ $avatarInitial }}
                            </div>

                            <div class="modern-show-summary-main">
                                <h2 class="modern-show-section-title">
                                    <i class="la la-user"></i>
                                    Perfil
                                </h2>

                                <div class="modern-show-summary-grid">
                                    @forelse ($summaryColumns as $column)
                                        <div class="modern-show-summary-item">
                                            <div class="modern-show-label">
                                                {!! $column['label'] !!}
                                            </div>

                                            <div class="modern-show-value">
                                                @includeFirst(
                                                    \Backpack\CRUD\ViewNamespaces::getViewPathsWithFallbackFor(
                                                        'columns',
                                                        $column['type'],
                                                        'crud::columns.text'
                                                    )
                                                )
                                            </div>
                                        </div>
                                    @empty
                                        <div class="modern-show-empty">
                                            Nenhuma informação principal para exibir.
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modern-show-grid">
                        <div class="modern-show-card modern-show-panel">
                            <h2 class="modern-show-section-title">
                                <i class="la la-shield-alt"></i>
                                Detalhes
                            </h2>

                            @forelse ($detailColumns as $column)
                                <div class="modern-show-row">
                                    <div class="modern-show-label">
                                        {!! $column['label'] !!}
                                    </div>

                                    <div class="modern-show-value">
                                        @includeFirst(
                                            \Backpack\CRUD\ViewNamespaces::getViewPathsWithFallbackFor(
                                                'columns',
                                                $column['type'],
                                                'crud::columns.text'
                                            )
                                        )
                                    </div>
                                </div>
                            @empty
                                <div class="modern-show-empty">
                                    Nenhuma informação adicional.
                                </div>
                            @endforelse
                        </div>

                        <div class="modern-show-card modern-show-panel">
                            <h2 class="modern-show-section-title">
                                <i class="la la-calendar"></i>
                                Metadados
                            </h2>

                            @forelse ($metadataColumns as $column)
                                <div class="modern-show-row">
                                    <div class="modern-show-label">
                                        {!! $column['label'] !!}
                                    </div>

                                    <div class="modern-show-value">
                                        @includeFirst(
                                            \Backpack\CRUD\ViewNamespaces::getViewPathsWithFallbackFor(
                                                'columns',
                                                $column['type'],
                                                'crud::columns.text'
                                            )
                                        )
                                    </div>
                                </div>
                            @empty
                                <div class="modern-show-empty">
                                    Sem metadados para exibir.
                                </div>
                            @endforelse
                        </div>
                    </div>
                @endif
            @endif
        </div>
    </div>
@endsection
