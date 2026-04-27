@extends('admin.crud.form-template')

@section('starter_form_fields')
    @include('admin.crud.partials.form-sections', [
        'sections' => $crud->getOperationSetting('updateSections') ?? [],
        'action' => 'edit',
        'entry' => $entry,
        'id' => $id ?? 'crudForm',
    ])
@endsection
