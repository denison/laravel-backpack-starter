@extends(backpack_view('blank'))

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card starter-dashboard-card">
                <div class="card-body">
                    <span class="text-muted d-flex align-items-center gap-2 mb-2">
                        <i class="la la-building" aria-hidden="true"></i>
                        Ambiente da empresa
                    </span>
                    <h1 class="h2 mb-2">Bem-vindo à {{ $currentTenant->name }}</h1>
                    <p class="text-muted mb-0">Este espaço reúne os dados e as operações vinculados à empresa ativa.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
