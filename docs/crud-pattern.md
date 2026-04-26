# Padrao para Criar CRUD

Este documento descreve o caminho recomendado para criar um novo CRUD administrativo neste starter.

O objetivo e manter todos os modulos com a mesma estrutura, usando Backpack para tela/admin e deixando regra de negocio fora do controller quando ela crescer.

## Estrutura

Para CRUDs administrativos, use este corte:

```text
CrudController -> Service -> RepositoryInterface -> Repository -> Model
```

Responsabilidades:

- `CrudController`: configura Backpack, rotas, colunas, campos, filtros, views, permissoes e chamadas objetivas ao service.
- `Service`: regra de negocio, preparo de dados, transacoes e sincronizacoes.
- `RepositoryInterface`: contrato da persistencia.
- `Repository`: consultas Eloquent e operacoes de banco.
- `Model`: relacionamentos, casts, traits e configuracao do Eloquent.
- `Policy`: usar quando a autorizacao depender do model/contexto.

Regra pratica:

- Se for apenas montagem de tela Backpack, fica no controller.
- Se encostar no banco com regra propria do projeto, vai para service/repository.
- Se for CRUD simples sem regra propria, use o que o Backpack ja entrega.

## 1. Model e Migration

Crie o model e a migration:

```bash
docker compose exec app-dev php artisan make:model Process -m
```

No model, configure pelo menos:

```php
protected $fillable = [
    'name',
    'status',
];

protected function casts(): array
{
    return [
        'active' => 'boolean',
    ];
}
```

Use relationships, casts e traits no model. Evite colocar regra de tela Backpack nele.

## 2. RepositoryInterface

Crie o contrato em:

```text
app/Contracts/Repositories/ProcessRepositoryInterface.php
```

Exemplo:

```php
namespace App\Contracts\Repositories;

interface ProcessRepositoryInterface extends BaseRepositoryInterface
{
    //
}
```

Adicione metodos especificos apenas quando o CRUD precisar de consultas proprias.

## 3. Repository

Crie o repository em:

```text
app/Repositories/ProcessRepository.php
```

Exemplo:

```php
namespace App\Repositories;

use App\Contracts\Repositories\ProcessRepositoryInterface;
use App\Models\Process;

class ProcessRepository extends BaseRepository implements ProcessRepositoryInterface
{
    protected function modelClass(): string
    {
        return Process::class;
    }
}
```

## 4. Service

Crie o service em:

```text
app/Services/ProcessService.php
```

Exemplo:

```php
namespace App\Services;

use App\Contracts\Repositories\ProcessRepositoryInterface;

class ProcessService
{
    public function __construct(
        private readonly ProcessRepositoryInterface $processes
    ) {}
}
```

Use o service para regra de negocio. Se o CRUD for puramente Backpack, o service pode comecar vazio ou nem existir ainda.

## 5. Binding no Container

Registre o binding em:

```text
app/Providers/AppServiceProvider.php
```

Exemplo:

```php
use App\Contracts\Repositories\ProcessRepositoryInterface;
use App\Repositories\ProcessRepository;

$this->app->bind(ProcessRepositoryInterface::class, ProcessRepository::class);
```

## 6. CrudController

Crie o controller do Backpack em:

```text
app/Http/Controllers/Admin/ProcessCrudController.php
```

Estrutura base:

```php
namespace App\Http\Controllers\Admin;

use App\Enums\CrudListIcon;
use App\Models\Process;
use App\Traits\HasCrudListFilters;
use App\Traits\HasCrudRoutePermissions;
use App\Traits\HasCrudUiPermissions;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
use Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

class ProcessCrudController extends CrudController
{
    use CreateOperation;
    use DeleteOperation;
    use HasCrudListFilters;
    use HasCrudRoutePermissions;
    use HasCrudUiPermissions;
    use ListOperation;
    use ShowOperation;
    use UpdateOperation;

    public function __construct()
    {
        parent::__construct();

        $this->applyCrudRoutePermissions('processes');
    }

    public function setup(): void
    {
        $this->crud->setModel(Process::class);
        $this->crud->setRoute(backpack_url('process'));
        $this->crud->setEntityNameStrings('processo', 'processos');

        $this->applyCrudUiPermissions('processes');
    }

    protected function setupListOperation(): void
    {
        $this->crud->set('list.icon', CrudListIcon::Default->value);

        $this->crud->addColumns([
            ['name' => 'name', 'label' => 'Nome', 'type' => 'text'],
            ['name' => 'status', 'label' => 'Status', 'type' => 'text'],
        ]);

        $this->applyCrudListFilters();
    }

    protected function setupCreateOperation(): void
    {
        $this->crud->addFields([
            ['name' => 'name', 'label' => 'Nome', 'type' => 'text'],
            ['name' => 'status', 'label' => 'Status', 'type' => 'text'],
        ]);
    }

    protected function setupUpdateOperation(): void
    {
        $this->setupCreateOperation();
    }
}
```

## 7. Rotas Backpack

Registre a rota CRUD no arquivo de rotas admin usado pelo projeto.

Padrao Backpack:

```php
Route::crud('process', ProcessCrudController::class);
```

Use o mesmo prefixo nas permissoes. Exemplo:

```text
processes.access
processes.create
processes.edit
processes.delete
```

## 8. Permissoes

Adicione as permissoes no seeder:

```text
database/seeders/RolePermissionSeeder.php
```

Padrao:

```php
['name' => 'processes.access', 'display_name' => 'Acessar processos'],
['name' => 'processes.create', 'display_name' => 'Criar processos'],
['name' => 'processes.edit', 'display_name' => 'Editar processos'],
['name' => 'processes.delete', 'display_name' => 'Deletar processos'],
```

Depois inclua essas permissoes nas roles corretas.

## 9. Traducoes dos Blocos

Adicione o bloco em:

```text
lang/pt-BR/permission-blocks.php
```

Exemplo:

```php
'processes' => [
    'singular' => 'Processo',
    'plural' => 'Processos',
],
```

## 10. Icone da Listagem

Se o CRUD precisar de icone proprio, adicione em:

```text
app/Enums/CrudListIcon.php
```

Exemplo:

```php
case Processes = 'la la-folder-open';
```

Uso no controller:

```php
$this->crud->set('list.icon', CrudListIcon::Processes->value);
```

## 11. Filtros

Use o trait:

```php
use HasCrudListFilters;
```

Exemplo:

```php
$this->addCrudListFilter([
    'name' => 'status',
    'label' => 'Status',
    'type' => 'select',
    'options' => [
        'draft' => 'Rascunho',
        'published' => 'Publicado',
    ],
    'query' => function ($crud, $value) {
        $crud->addClause('where', 'status', $value);
    },
]);

$this->applyCrudListFilters();
```

Tipos suportados:

```text
text
select
date
```

## 12. Menu

Adicione o item em:

```text
resources/views/vendor/backpack/ui/inc/menu_items.blade.php
```

Exemplo:

```blade
@if (backpack_user()?->can('processes.access'))
    <li class="nav-item">
        <a class="nav-link" href="{{ backpack_url('process') }}">
            <i class="la la-folder-open nav-icon"></i> <span>Processos</span>
        </a>
    </li>
@endif
```

## 13. Views Customizadas

Use views customizadas apenas quando o CRUD precisar de experiencia diferente do padrao Backpack.

Padrao atual para forms customizados:

```text
resources/views/admin/{module}/form.blade.php
```

No controller:

```php
CRUD::setCreateView('admin.processes.form');
CRUD::setEditView('admin.processes.form');
```

Se o CRUD simples funcionar bem com os fields nativos do Backpack, nao crie view customizada.

## 14. Checklist Final

Antes de considerar o CRUD pronto:

- Migration criada e rodada.
- Model com fillable/casts/relationships.
- RepositoryInterface criado quando necessario.
- Repository criado quando necessario.
- Service criado quando existir regra propria.
- Binding registrado no `AppServiceProvider`.
- CrudController configurado.
- Rota Backpack criada.
- Permissoes adicionadas no seeder.
- Bloco de traducao de permissoes criado.
- Menu protegido por permissao.
- Icone configurado no enum quando necessario.
- Filtros adicionados quando fizerem sentido.
- `composer format:test` passando.
- `composer analyse` passando.
- `composer test` passando.
