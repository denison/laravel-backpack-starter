# Form Template do Starter

Este documento explica o padrão visual usado nos formulários de `create` e `edit` do starter Laravel 13 + Backpack 7.

A ideia principal é:

> Manter o Backpack funcionando normalmente, mas trocar a camada visual dos formulários por um layout mais moderno e padronizado.

Ou seja, não estamos criando um formulário fora do Backpack. Estamos apenas criando uma estrutura visual própria para renderizar os campos e blocos customizados.

---

## 1. Arquivos principais

A base visual dos formulários está concentrada nestes arquivos:

```txt
resources/views/admin/crud/form-template.blade.php
resources/views/admin/crud/partials/form-sections.blade.php
resources/views/admin/components/form-section.blade.php
```

### `form-template.blade.php`

É o template principal do formulário.

Ele controla:

- layout geral;
- título;
- descrição;
- botão de voltar;
- abertura e fechamento da tag `<form>`;
- `csrf`;
- método `PUT` no edit;
- erros agrupados;
- botões de salvar;
- estrutura visual externa.

Dentro dele existe este ponto de entrada:

```blade
@yield('starter_form_fields')
```

Tudo que for campo ou bloco específico do formulário entra nesse `yield`.

---

### `form-sections.blade.php`

É o partial responsável por renderizar os campos Backpack organizados em seções.

Ele recebe uma lista de sections, por exemplo:

```php
$crud->getOperationSetting('createSections')
$crud->getOperationSetting('updateSections')
```

E renderiza os campos automaticamente usando as views de fields do Backpack.

Esse partial é usado quando o formulário pode seguir o padrão automático.

---

### `admin/components/form-section.blade.php`

É o component visual para criar uma seção manual.

Ele serve para quando o CRUD precisa de um bloco específico, por exemplo:

- permissões;
- roles;
- tabela manual;
- campos com AJAX;
- switches;
- blocos customizados;
- regras específicas da tela.

O component monta só a moldura visual da seção.

O conteúdo interno entra pelo `$slot`.

Exemplo:

```blade
@component('admin.components.form-section', [
    'key' => 'user-access',
    'icon' => 'la la-user-lock',
    'title' => 'Acesso do usuário',
    'description' => 'Selecione o grupo principal e ajuste permissões extras quando necessário.',
])
    {{-- Conteúdo manual aqui --}}
@endcomponent
```

Tudo que estiver entre `@component` e `@endcomponent` será renderizado dentro do component no local do:

```blade
{{ $slot }}
```

```A Base final de um novo arquivo é 
    {{-- resources/views/admin/algum-crud/form.blade.php --}}
    @extends('admin.crud.form-template')

    @section('starter_form_fields')
        @php
            $entry = $entry ?? $crud->getCurrentEntry();

            $operation = $crud->getOperation();
            $action = $operation === 'update' ? 'edit' : 'create';

            $sections = $operation === 'update'
                ? ($crud->getOperationSetting('updateSections') ?? [])
                : ($crud->getOperationSetting('createSections') ?? []);

            // Daqui para baixo entra lógica específica da tela, se precisar.
        @endphp

        {{-- Campos normais automáticos --}}
        @include('admin.crud.partials.form-sections', [
            'sections' => $sections,
            'action' => $action,
            'entry' => $entry,
            'id' => $id ?? 'crudForm',
        ])

        {{-- Bloco manual específico, se precisar --}}
        @component('admin.components.form-section', [
            'key' => 'user-access',
            'icon' => 'la la-user-lock',
            'title' => 'Acesso do usuário',
            'description' => 'Selecione o grupo principal e ajuste permissões extras quando necessário.',
        ])
            {{-- Tudo aqui dentro entra no $slot do component --}}
        @endcomponent
    @endsection
```
---

## 2. Quando usar o formulário padrão

Use o formulário padrão quando o CRUD só precisa renderizar campos normais do Backpack.

Exemplo:

```php
$this->crud->addField([
    'name' => 'name',
    'label' => 'Nome',
    'type' => 'text',
    'section' => CreateSection::Main->value,
]);
```

Se o CRUD não precisa de regra visual específica, não é necessário criar uma view própria.

O fluxo padrão será:

```txt
CrudController
→ addField()
→ prepareCreateSections()
→ create/edit padrão do starter
→ form-template
→ form-sections
```

Esse é o melhor caminho para cadastros simples.

---

## 3. Quando criar um form específico

Crie uma view específica quando o CRUD precisa de algo que o Backpack padrão não resolve bem visualmente.

Exemplos:

- tela de usuários com grupos e permissões extras;
- tela de roles com matriz de permissões;
- campos que dependem de AJAX;
- blocos manuais;
- validações visuais específicas;
- selects, switches ou cards com comportamento próprio;
- layout que não é só uma lista de campos.

Nesse caso, no `setup()` do CrudController, use:

```php
CRUD::setCreateView('admin.users.form');
CRUD::setEditView('admin.users.form');
```

Isso não remove o Backpack.

Isso apenas diz:

> Para create e edit deste CRUD, use esta view customizada.

O salvamento, validação, rotas, requests e operações continuam sendo do Backpack.

---

## 4. Estrutura base de um form específico

Um form específico deve extender o template padrão:

```blade
{{-- resources/views/admin/users/form.blade.php --}}
@extends('admin.crud.form-template')

@section('starter_form_fields')
    {{-- campos e blocos do formulário entram aqui --}}
@endsection
```

Não deve repetir:

```blade
@extends(backpack_view('blank'))
@section('header')
@section('content')
<form>
@csrf
@method('PUT')
@include('crud::inc.grouped_errors')
@include('crud::inc.form_save_buttons')
```

Tudo isso já pertence ao `form-template`.

A view específica deve cuidar apenas do miolo do formulário.

---

## 5. Renderizando campos automáticos dentro de um form específico

Mesmo em um form customizado, ainda é possível aproveitar os campos automáticos do Backpack.

Exemplo:

```blade
@php
    $entry = $entry ?? $crud->getCurrentEntry();

    $operation = $crud->getOperation();
    $action = $operation === 'update' ? 'edit' : 'create';

    $sections = $operation === 'update'
        ? ($crud->getOperationSetting('updateSections') ?? [])
        : ($crud->getOperationSetting('createSections') ?? []);
@endphp

@include('admin.crud.partials.form-sections', [
    'sections' => $sections,
    'action' => $action,
    'entry' => $entry,
    'id' => $id ?? 'crudForm',
])
```

Esse trecho renderiza todos os campos cadastrados no CrudController e organizados pelas sections.

---

## 6. Criando uma seção manual dentro de um form específico

Quando uma parte da tela precisa ser manual, use o component:

```blade
@component('admin.components.form-section', [
    'key' => 'custom-section',
    'icon' => 'la la-layer-group',
    'title' => 'Título da seção',
    'description' => 'Descrição da seção.',
])
    <div class="row">
        <div class="col-md-12">
            Conteúdo manual aqui.
        </div>
    </div>
@endcomponent
```

O component cria automaticamente a estrutura:

```html
<div class="starter-form-sections">
    <section class="starter-form-section starter-form-section-custom-section">
        <div class="starter-form-section-aside">
            ...
        </div>

        <div class="starter-form-section-content">
            ...
        </div>
    </section>
</div>
```

O conteúdo manual entra dentro de:

```blade
{{ $slot }}
```

---

## 7. Padrão híbrido recomendado

O melhor padrão para CRUDs mais complexos é o híbrido:

```txt
form-template
├── form-sections automático
│   └── campos simples do Backpack
│
└── form-section manual
    └── regra específica da tela
```

Exemplo conceitual:

```blade
@extends('admin.crud.form-template')

@section('starter_form_fields')
    @php
        $entry = $entry ?? $crud->getCurrentEntry();

        $operation = $crud->getOperation();
        $action = $operation === 'update' ? 'edit' : 'create';

        $sections = $operation === 'update'
            ? ($crud->getOperationSetting('updateSections') ?? [])
            : ($crud->getOperationSetting('createSections') ?? []);
    @endphp

    @include('admin.crud.partials.form-sections', [
        'sections' => $sections,
        'action' => $action,
        'entry' => $entry,
        'id' => $id ?? 'crudForm',
    ])

    @component('admin.components.form-section', [
        'key' => 'custom',
        'icon' => 'la la-sliders-h',
        'title' => 'Bloco customizado',
        'description' => 'Configure regras específicas deste cadastro.',
    ])
        {{-- conteúdo manual --}}
    @endcomponent
@endsection
```

Esse padrão evita duplicação.

Os campos comuns continuam automáticos.

Só a parte realmente especial fica manual.

---

## 8. Exemplo: Roles

No CRUD de roles, os campos simples são:

- `name`;
- `display_name`;
- `guard_name`, se existir.

Eles podem ser renderizados pelo `form-sections`.

A parte especial é a lista de permissões.

Então o form de roles deve seguir este formato:

```txt
Campos básicos
→ automático via form-sections

Permissões
→ manual via admin.components.form-section
```

Exemplo:

```blade
@component('admin.components.form-section', [
    'key' => 'permissions',
    'icon' => 'la la-user-lock',
    'title' => 'Permissões',
    'description' => 'Ative as ações desejadas para este perfil de acesso.',
])
    <div class="row permission-modules-grid">
        {{-- grid manual de permissões --}}
    </div>
@endcomponent
```

---

## 9. Exemplo: Users

No CRUD de usuários, os campos simples são:

- `name`;
- `email`;
- `password`;
- `password_confirmation`.

Esses campos ficam no `form-sections`.

A parte especial é o acesso do usuário:

- grupo principal;
- permissões extras;
- permissões travadas pelo grupo;
- permissões livres para marcação.

Então o form de users deve seguir este formato:

```txt
Informações principais
→ automático via form-sections

Acesso do usuário
→ manual via admin.components.form-section
```

Exemplo:

```blade
@component('admin.components.form-section', [
    'key' => 'user-access',
    'icon' => 'la la-user-lock',
    'title' => 'Acesso do usuário',
    'description' => 'Selecione o grupo principal e ajuste permissões extras quando necessário.',
])
    {{-- grupo de acesso --}}

    {{-- permissões extras --}}
@endcomponent
```

Nesse caso, “Grupo de acesso” e “Permissões extras” ficam dentro da mesma seção, porque fazem parte do mesmo conceito.

---

## 10. Cuidado com campos duplicados

Quando uma parte for renderizada manualmente, ela não deve continuar sendo renderizada automaticamente pelo Backpack.

Exemplo:

Se o formulário de usuários renderiza manualmente:

```html
name="roles[]"
name="permissions[]"
```

Então não deve existir um field automático do Backpack como:

```php
[
    'type' => 'checklist_dependency',
    'name' => 'roles,permissions',
]
```

Caso contrário, a tela vai mostrar duas vezes a mesma coisa:

```txt
1. checklist_dependency automático
2. bloco manual customizado
```

A regra é:

```txt
Campo normal → Backpack/render automático
Campo especial → Blade manual
```

Nunca os dois ao mesmo tempo para a mesma responsabilidade.

---

## 11. IDs, classes e JavaScript

Dentro do component manual, é possível usar qualquer HTML normalmente.

Exemplo:

```blade
@component('admin.components.form-section', [
    'key' => 'filters',
    'icon' => 'la la-filter',
    'title' => 'Filtros',
    'description' => 'Configure os filtros disponíveis.',
])
    <input
        type="text"
        id="custom-filter"
        name="custom_filter"
        class="form-control"
        data-target="filters"
    >
@endcomponent
```

O component não interfere em:

- `id`;
- `name`;
- `class`;
- `data-*`;
- jQuery;
- AJAX;
- Select2;
- máscaras;
- validações;
- scripts próprios.

O component só gera a moldura visual.

O JavaScript continua funcionando normalmente, porque no navegador tudo vira HTML comum.

---

## 12. Performance

O component Blade não pesa de forma relevante.

Ele é renderizado no servidor como qualquer Blade normal:

```blade
@include
@extends
@section
@component
```

O que pode pesar é o conteúdo dentro dele, por exemplo:

- muitos checkboxes;
- muitos selects com Select2;
- loops grandes;
- AJAX em excesso;
- scripts inicializados várias vezes;
- queries feitas diretamente na view.

Mas isso pesaria igual mesmo sem component.

A regra é:

```txt
Component não é o problema.
Conteúdo pesado é o problema.
```

---

## 13. Regra prática

Use esta decisão:

```txt
CRUD simples?
→ usa form padrão automático.

CRUD com uma parte especial?
→ usa form-template + form-sections + form-section manual.

CRUD totalmente especial?
→ usa form-template + sections manuais.
```

Nunca recrie a casca completa do formulário se o `form-template` já faz isso.

A view específica deve controlar apenas o conteúdo de:

```blade
@section('starter_form_fields')
    ...
@endsection
```

### Select2 com ícone

Nos CRUDs Backpack, use o field reutilizável `starter_select2_icon` quando o Select2 precisar de um ícone interno:

```php
[
    'name' => 'category_id',
    'label' => 'Categoria',
    'type' => 'starter_select2_icon',
    'icon' => 'la la-folder',
    'options' => $categoryOptions,
    'placeholder' => 'Selecione a categoria',
    'allows_null' => true,
]
```

Para seleção múltipla, informe `allows_multiple => true` e mantenha `options` como um array de chave e rótulo. O field já aplica o shell, o cloak durante a inicialização, alinhamento, altura, padding, responsividade e dark mode.

Fora de um CRUD, envolva o `select.starter-select2` com `starter-select-shell` e use `starter-select-shell-icon` no ícone. Não replique essas regras em CSS específico da página.

---

## 14. Checklist para criar um form específico

Quando precisar criar uma view específica para um CRUD, siga esta ordem:

1. Defina a view no CrudController:

```php
CRUD::setCreateView('admin.exemplo.form');
CRUD::setEditView('admin.exemplo.form');
```

2. Crie a view:

```txt
resources/views/admin/exemplo/form.blade.php
```

3. Comece com a base:

```blade
@extends('admin.crud.form-template')

@section('starter_form_fields')
@endsection
```

4. Renderize os campos automáticos:

```blade
@include('admin.crud.partials.form-sections', [
    'sections' => $sections,
    'action' => $action,
    'entry' => $entry,
    'id' => $id ?? 'crudForm',
])
```

5. Adicione as sections manuais com:

```blade
@component('admin.components.form-section', [...])
    {{-- conteúdo manual --}}
@endcomponent
```

6. Se precisar de CSS específico, use:

```blade
@push('after_styles')
    <style>
        ...
    </style>
@endpush
```

7. Se precisar de JS específico, use:

```blade
@push('after_scripts')
    <script>
        ...
    </script>
@endpush
```

8. Verifique se não existem fields automáticos duplicando blocos manuais.

9. Teste create.

10. Teste edit.

11. Teste validação.

12. Teste submit e persistência dos campos manuais.

---

## 15. Resumo final

O padrão final é:

```txt
form-template
→ controla a casca do formulário

form-sections
→ renderiza campos Backpack automaticamente

form-section component
→ cria blocos manuais com o mesmo visual

form customizado
→ usa apenas o que precisa, sem duplicar estrutura
```

Esse padrão permite criar telas mais modernas sem abandonar o Backpack.
