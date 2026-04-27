@extends('admin.crud.form-template')

@section('starter_form_fields')
    @include('admin.crud.partials.form-sections', [
        'sections' => $crud->getOperationSetting('createSections') ?? [],
        'action' => 'create',
        'entry' => $entry ?? null,
        'id' => $id ?? 'crudForm',
    ])
@endsection
