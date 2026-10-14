@if ($currentTenant)
    <div class="starter-company-context-switcher">
        @if ($isPlatformUser)
            <form method="POST" action="{{ route('backpack.company.context.update') }}" data-company-context-switch-form>
                @csrf
                @method('PATCH')
                <input type="hidden" name="redirect_to" value="{{ request()->getRequestUri() }}">

                <div class="starter-select-shell" data-select2-cloak>
                    <i class="la la-building starter-select-shell-icon" aria-hidden="true"></i>
                    <select
                        id="company-context-select"
                        name="tenant_id"
                        class="form-select starter-select2 starter-company-context-select"
                        data-placeholder="Selecione a empresa"
                        aria-label="Empresa atual"
                        required
                    >
                        @foreach ($companyOptions as $tenantId => $tenantName)
                            <option value="{{ $tenantId }}" @selected((int) $tenantId === (int) $currentTenant->getKey())>
                                {{ $tenantName }}
                            </option>
                        @endforeach
                        <option value="__platform__">Voltar para Plataforma</option>
                    </select>
                </div>
            </form>

            <form method="POST" action="{{ route('backpack.company.context.destroy') }}" class="d-none" data-company-context-leave-form>
                @csrf
                @method('DELETE')
            </form>
        @else
            <div class="starter-company-context-static" aria-label="Empresa atual">
                <i class="la la-building" aria-hidden="true"></i>
                <strong>{{ $currentTenant->name }}</strong>
            </div>
        @endif
    </div>
@endif
