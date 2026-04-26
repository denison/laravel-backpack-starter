<?php

namespace App\Http\Controllers\Admin;

use App\Enums\CrudListIcon;
use App\Models\ActivityLog;
use App\Traits\HasCrudListFilters;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

class ActivityLogCrudController extends CrudController
{
    use HasCrudListFilters;
    use ListOperation;
    use ShowOperation;

    public function __construct()
    {
        parent::__construct();

        $this->middleware('check.permission:activity_logs.access')
            ->only(['index', 'search', 'show', 'showDetailsRow']);
    }

    public function setup(): void
    {
        $this->crud->setModel(ActivityLog::class);
        $this->crud->setRoute(backpack_url('activity-log'));
        $this->crud->setEntityNameStrings('log de atividade', 'logs de atividade');
        $this->crud->denyAccess(['create', 'update', 'delete']);
    }

    protected function setupListOperation(): void
    {
        $this->crud->set('list.icon', CrudListIcon::ActivityLogs->value);
        $this->crud->orderBy('created_at', 'desc');

        $this->addCrudListFilter([
            'name' => 'event',
            'label' => 'Evento',
            'type' => 'select',
            'options' => [
                'created' => 'Criado',
                'updated' => 'Atualizado',
                'deleted' => 'Deletado',
            ],
            'query' => function ($crud, $value) {
                $crud->addClause('where', 'event', $value);
            },
        ]);

        $this->addCrudListFilter([
            'name' => 'log_name',
            'label' => 'Log',
            'type' => 'text',
            'query' => function ($crud, $value) {
                $crud->addClause('where', 'log_name', 'like', "%{$value}%");
            },
        ]);

        $this->addCrudListFilter([
            'name' => 'created_at',
            'label' => 'Data',
            'type' => 'date',
            'query' => function ($crud, $value) {
                $crud->addClause('whereDate', 'created_at', $value);
            },
        ]);

        $this->crud->addColumns([
            [
                'name' => 'created_at',
                'label' => 'Data',
                'type' => 'datetime',
            ],
            [
                'name' => 'event',
                'label' => 'Evento',
                'type' => 'text',
            ],
            [
                'name' => 'description',
                'label' => 'Descrição',
                'type' => 'text',
            ],
            [
                'name' => 'subject_type',
                'label' => 'Entidade',
                'type' => 'text',
            ],
            [
                'name' => 'subject_id',
                'label' => 'ID',
                'type' => 'number',
            ],
            [
                'name' => 'causer',
                'label' => 'Usuário',
                'type' => 'closure',
                'function' => function (ActivityLog $entry) {
                    return $entry->causer?->name ?? $entry->causer?->email ?? '-';
                },
            ],
        ]);

        $this->applyCrudListFilters();
    }

    protected function setupShowOperation(): void
    {
        $this->crud->addColumns([
            ['name' => 'id', 'label' => 'ID', 'type' => 'number'],
            ['name' => 'log_name', 'label' => 'Log', 'type' => 'text'],
            ['name' => 'event', 'label' => 'Evento', 'type' => 'text'],
            ['name' => 'description', 'label' => 'Descrição', 'type' => 'text'],
            ['name' => 'subject_type', 'label' => 'Entidade', 'type' => 'text'],
            ['name' => 'subject_id', 'label' => 'Entidade ID', 'type' => 'number'],
            ['name' => 'causer_type', 'label' => 'Usuário tipo', 'type' => 'text'],
            ['name' => 'causer_id', 'label' => 'Usuário ID', 'type' => 'number'],
            ['name' => 'properties', 'label' => 'Propriedades', 'type' => 'json'],
            ['name' => 'created_at', 'label' => 'Criado em', 'type' => 'datetime'],
        ]);
    }
}
