<header class="d-print-none {{ backpack_theme_config('classes.topHeader') ?? 'd-none d-lg-block px-3 navbar navbar-expand-md topbar-transparent' }}">
    <div class="{{ backpack_theme_config('options.useFluidContainers') ? 'container-fluid' : 'container-xxl' }} starter-topbar-container">
        @includeWhen(request()->routeIs('backpack.company.*'), 'admin.topbar.company-context-switcher')

        <div class="navbar-nav ms-auto">
            @include(backpack_view('inc.menu'))
        </div>
    </div>
</header>
