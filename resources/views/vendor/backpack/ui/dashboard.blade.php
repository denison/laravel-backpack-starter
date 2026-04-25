@extends(backpack_view('blank'))

@php
    $user = backpack_user();
    $name = $user?->name ?: $user?->email ?: 'usuario';
@endphp

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h1 class="h2 mb-2">Bem vindo, {{ $name }}</h1>
                    <p class="text-muted mb-0">Você está logado no painel administrativo.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
