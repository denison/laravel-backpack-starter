# Memória do Projeto para o Codex

## Contexto

- Starter comercial em Laravel 13, PHP 8.4 e Backpack 7.
- O painel usa o prefixo `/app`; rotas e identificadores técnicos permanecem em inglês.
- O projeto usa o Backpack gratuito. Nunca adicionar fields, columns ou filtros PRO sem proteção explícita por `backpack_pro()`.
- O bloco legado condicionado a `backpack_pro()` no CRUD de usuários deve ser preservado.
- O PHP do host pode estar em 8.3; comandos Artisan, Composer e testes devem ser entregues ao usuário para execução no container `app-dev` quando PHP 8.4 for necessário.
- Evitar executar comandos que o usuário possa rodar quando não forem necessários para diagnosticar ou validar a alteração.

## Arquitetura obrigatória

```text
CrudController -> Service -> RepositoryInterface -> Repository -> Model
```

- Controller: configuração do Backpack, campos, colunas, filtros e coordenação do fluxo.
- Form Request: autorização de entrada, validação e normalização dos dados.
- Service: regras de negócio e sincronizações.
- Repository: consultas Eloquent, visibilidade e persistência.
- Policy: autorização sobre um registro específico.
- Middleware: acesso transversal à aplicação, nunca filtragem de consultas de domínio.
- Model: atributos, casts, accessors, relacionamentos e configuração Eloquent. Não colocar regras de hierarquia ou visibilidade na Model.
- DTOs e factories de construção não devem ser criados por cerimônia. O container do Laravel resolve serviços; DTO só entra quando houver fronteira ou estrutura de dados complexa.

## Plataforma e empresas

- `tenants` representam empresas clientes da plataforma.
- `users.tenant_id` é nullable:
  - `null`: funcionário da plataforma;
  - preenchido: usuário pertencente a uma empresa.
- Não criar `tenant_user`: um usuário pertence a uma empresa. Atribuir funcionários da plataforma a várias empresas é outra regra de negócio e não pertence a esta base.
- Não adicionar global scope genérico de tenancy. Cada módulo futuro deve aplicar sua regra quando o domínio exigir.
- Visibilidade da listagem de usuários fica no `UserRepository`; acesso direto fica na `UserPolicy`.
- Usuário de empresa só pode consultar e administrar usuários da própria empresa.
- A tentativa de acessar registro oculto continua semanticamente como 404, mas o painel volta à página anterior ou ao dashboard com Noty genérico.

## Roles iniciais

- `super`: proprietário da plataforma; recebe todas as permissões.
- `manager`: gestor da plataforma; antigo `admin` é migrado para esta role pelo seeder.
- `administrative`: administrativo da plataforma.
- `tenant_admin`: gestor da empresa.
- `tenant_administrative`: administrativo da empresa.

Permissões de `permissions.*`, `roles.*`, `tenants.*` e `activity_logs.*` são exclusivas da plataforma. Roles de empresa não podem receber essas permissões como extras.

## Conta ativa

- `EnsureAccountIsActive` bloqueia usuário inativo e usuário de empresa inativa, excluída ou inexistente.
- O switch AJAX reutilizável altera o status de usuários e empresas e usa Noty.
- Quem possui `users.edit` pode alterar o próprio status; ao se desativar, será desconectado na requisição seguinte.
- A plataforma deve manter pelo menos um `super` ativo.

## Imagens e Media Library

- Usuários usam a coleção única `avatar`; empresas usam a coleção única `logo`.
- Não criar colunas para essas imagens: os arquivos e vínculos ficam na tabela `media` da Spatie Media Library.
- O avatar local substitui o Gravatar. Sem foto, manter a inicial do nome como fallback visual.
- Uploads aceitam JPG, PNG e WebP de até 5 MB e geram miniaturas locais não enfileiradas.
- Sincronização e remoção de imagens passam pelo `ImageMediaService`.

## Identificadores

- Manter IDs numéricos como chaves internas e nas rotas administrativas do Backpack.
- `Tenant` possui slug automático e único para uso comercial ou em rotas futuras que precisem ser legíveis.
- Não aplicar slug, UUID ou ULID indiscriminadamente.
- Quando um projeto precisar ocultar sequências em URLs públicas, adicionar `public_id` somente às entidades expostas.
- Identificadores não substituem Policies nem isolamento por tenant.

## Convenções visuais

- CSS global do painel: `resources/css/backpack`.
- Tokens e cores: `resources/css/backpack/theme.css`.
- JavaScript global do painel: `resources/js/backpack`.
- Assets são registrados em `config/backpack/theme-tabler.php` e exigem `php artisan basset:clear` depois de alterações.
- O select global gratuito usa `select_from_array` com a classe `starter-select2`.
- Máscaras são acionadas por classes JS reutilizáveis.
- O modal responsivo da tabela é o `dtr-modal` nativo do DataTables; seu visual global fica em `list.css`.
- Não inventar campos, agrupamentos ou layouts não solicitados.

## Migrations e seeders

- `DatabaseSeeder` executa primeiro `RolePermissionSeeder` e depois `AdminUserSeeder`.
- Seeders usam `updateOrCreate`/sincronização e devem continuar idempotentes.
- Credenciais iniciais vêm de `SEED_SUPER_*` e `SEED_MANAGER_*`.
- Senhas padrão servem apenas para desenvolvimento; devem ser alteradas antes do primeiro seed real.

## Validação antes de entregar

- Usar Pint, `php -l`, `node --check` e `git diff --check` de forma focada.
- Testes funcionais devem rodar no container PHP 8.4:

```bash
docker compose --profile dev exec app-dev php artisan test
```

- Para validar instalação limpa, somente em banco descartável:

```bash
docker compose --profile dev exec app-dev php artisan migrate:fresh --seed
```

- Preservar alterações existentes do usuário e não executar comandos destrutivos sem autorização explícita.
