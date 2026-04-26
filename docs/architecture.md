# Arquitetura do Projeto

Para CRUDs administrativos, o projeto segue este corte:

```text
CrudController -> Service -> RepositoryInterface -> Repository -> Model
```

## Responsabilidades

- `CrudController`: configura Backpack, rotas, colunas, campos, filtros, views e regras objetivas daquele CRUD.
- `Service`: regra de negocio, preparo de dados antes de salvar, transacoes e sincronizacoes.
- `RepositoryInterface`: contrato da persistencia.
- `Repository`: consultas Eloquent e operacoes de banco.
- `Model`: relacionamentos, casts, traits e configuracao do Eloquent.
- `Policy`: usar quando a autorizacao depender do model/contexto.

## Regra Pratica

- Se for apenas montagem de tela Backpack, fica no controller.
- Se encostar no banco com regra propria do projeto, vai para service/repository.
- Se for CRUD simples sem regra propria, usar o que o Backpack ja entrega.

## Base para Repositories

```text
app/Contracts/Repositories/BaseRepositoryInterface.php
app/Repositories/BaseRepository.php
```

## Exemplos Aplicados

```text
app/Contracts/Repositories/UserRepositoryInterface.php
app/Repositories/UserRepository.php
app/Services/UserService.php

app/Contracts/Repositories/RoleRepositoryInterface.php
app/Repositories/RoleRepository.php
app/Services/RoleService.php

app/Contracts/Repositories/PermissionRepositoryInterface.php
app/Repositories/PermissionRepository.php
app/Services/PermissionService.php
```
