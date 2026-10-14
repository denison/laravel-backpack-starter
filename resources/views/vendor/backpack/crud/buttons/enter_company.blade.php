@if (
    ! backpack_user()?->tenant_id
    && backpack_user()?->can('tenants.access')
    && $entry->active
    && ! $entry->trashed()
)
    <form method="POST" action="{{ route('backpack.company.enter', $entry) }}" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-sm btn-link" title="Acessar empresa">
            <i class="la la-sign-in-alt"></i> Acessar empresa
        </button>
    </form>
@endif
