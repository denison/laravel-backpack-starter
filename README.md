# Laravel Backpack Starter

Base para novos sistemas administrativos com Laravel 13, PHP 8.4, Backpack 7 e estrutura inicial para plataforma e empresas clientes.

O projeto entrega autenticação, usuários, grupos, permissões, empresas, auditoria, filas, cache, notificações em tempo real e uma interface administrativa customizada sem exigir o Backpack PRO.

## Stack

- Laravel 13
- PHP 8.4
- Backpack 7 com tema Tabler
- MySQL e Redis
- Docker com PHP-FPM e Nginx
- Horizon e Supervisor
- Reverb para eventos em tempo real
- Spatie Permission
- Spatie Activitylog
- Spatie Media Library
- PHPUnit

O painel utiliza o layout `vertical_transparent`, skin `backpack-color-palette` e prefixo `/app`.

## Funcionalidades incluídas

- Login e recuperação de senha pelo Backpack.
- Separação entre usuários da plataforma e usuários de empresas.
- Contextos distintos em `/app` e `/app/company`, com seletor da empresa ativa para usuários da plataforma.
- Empresas com CPF/CNPJ, endereço, contatos, slug e status.
- Consulta de CEP com preenchimento automático.
- Máscaras reutilizáveis para CPF/CNPJ, CEP, telefone e WhatsApp.
- Roles e permissões com nomes técnicos em inglês e exibição em português.
- Permissões extras por usuário, respeitando o limite da sua role e empresa.
- Bloqueio automático de usuário ou empresa inativa.
- Alteração AJAX de status com switch e Noty.
- Isolamento de usuários por empresa com Repository e Policy.
- Activity log para auditoria.
- Filtros gratuitos para as listagens, sem dependência do Backpack PRO.
- Tema claro e escuro com estilos centralizados.

## Requisitos

- Docker e Docker Compose
- Porta `8989` disponível para o painel local

Não é necessário instalar PHP, Composer, MySQL ou Redis diretamente na máquina.

## Instalação

1. Copie o arquivo de ambiente:

```bash
cp .env.example .env
```

2. Antes do primeiro seed, revise no `.env`:

```env
SEED_SUPER_NAME="Super Admin"
SEED_SUPER_EMAIL=super@example.com
SEED_SUPER_PASSWORD=troque-esta-senha

SEED_MANAGER_NAME="Platform Manager"
SEED_MANAGER_EMAIL=manager@example.com
SEED_MANAGER_PASSWORD=troque-esta-senha
```

3. Suba o ambiente de desenvolvimento:

```bash
docker compose --profile dev up -d --build
```

4. Instale as dependências PHP manualmente no container de desenvolvimento:

```bash
docker compose --profile dev exec app-dev composer install
```

5. No host, instale as dependências do frontend e gere os assets do Vite:

```bash
npm install
npm run build
```

O container `app-dev` não inclui Node.js ou npm. Esses comandos devem ser
executados na pasta do projeto, fora do container. O build cria o arquivo
`public/build/manifest.json`, exigido pela aplicação. Repita-o quando houver
alterações nas dependências ou nos assets processados pelo Vite.

6. Gere a chave da aplicação:

```bash
docker compose --profile dev exec app-dev php artisan key:generate
```

7. Crie o banco e os acessos iniciais:

```bash
docker compose --profile dev exec app-dev php artisan migrate --seed
```

8. Prepare o storage e os assets do Backpack:

```bash
docker compose --profile dev exec app-dev php artisan storage:link
docker compose --profile dev exec app-dev php artisan basset:cache
```

9. Limpe os caches da aplicação:

```bash
docker compose --profile dev exec app-dev php artisan optimize:clear
```

10. Reinicie o container da aplicação:

```bash
docker compose --profile dev restart app-dev
```

No primeiro clone, o `app-dev` é iniciado antes da instalação manual das
dependências PHP. O reinício garante que o Supervisor carregue Horizon e Reverb
depois que `vendor/autoload.php` estiver disponível.

Acesse:

```text
http://localhost:8989/app
```

Use o e-mail e a senha configurados em `SEED_SUPER_*` ou `SEED_MANAGER_*`.

## Plataforma e empresas

Uma empresa cliente é representada por `Tenant`.

- Usuário da plataforma: `tenant_id` vazio.
- Usuário da empresa: `tenant_id` preenchido.
- Cada usuário de empresa pertence a uma única empresa.
- O gestor de uma empresa só enxerga usuários da própria empresa.
- Empresa inativa ou excluída bloqueia o acesso dos seus usuários.

O projeto não aplica tenancy automaticamente a todos os models futuros. Cada novo módulo deve definir explicitamente como pertence e como é isolado por empresa.

## Roles iniciais

| Role | Nome exibido | Escopo inicial |
|---|---|---|
| `super` | Plataforma | Todas as permissões cadastradas |
| `manager` | Gestor da Plataforma | Usuários, empresas e logs |
| `administrative` | Administrativo da Plataforma | Acesso inicial às empresas |
| `tenant_admin` | Gestor da Empresa | Usuários da própria empresa |
| `tenant_administrative` | Administrativo da Empresa | Sem permissões iniciais |

Cada usuário possui uma role principal. Permissões da role são obrigatórias; permissões extras podem ser concedidas dentro do escopo permitido.

As permissões seguem o formato técnico em inglês:

```text
resource.access
resource.create
resource.edit
resource.delete
```

## Arquitetura

Os CRUDs administrativos seguem o fluxo:

```text
CrudController -> Service -> RepositoryInterface -> Repository -> Model
```

- Controller: configura o Backpack e coordena o fluxo.
- Form Request: valida e normaliza a entrada.
- Service: executa regras de negócio.
- Repository: concentra consultas e persistência.
- Policy: autoriza ações sobre registros específicos.
- Middleware: controla acesso transversal à aplicação.
- Model: atributos, casts, accessors e relacionamentos.

Regras de visibilidade não devem ser colocadas na Model. Por exemplo, a visibilidade dos usuários por empresa é aplicada pelo `UserRepository`, enquanto a proteção de um usuário específico fica na `UserPolicy`.

## Rotas e identificadores

- Rotas e nomes técnicos permanecem em inglês.
- O painel administrativo mantém IDs numéricos nas URLs internas.
- Empresas já possuem slug automático para rotas comerciais futuras.
- Slug, UUID ou ULID devem ser adotados somente quando o domínio do projeto justificar.
- A segurança das rotas depende de autenticação, permissões, Policies e isolamento por empresa, nunca do formato do identificador.

## Comandos úteis

Subir o ambiente:

```bash
docker compose --profile dev up -d
```

Parar o ambiente:

```bash
docker compose --profile dev down
```

Entrar no container:

```bash
docker compose --profile dev exec app-dev bash
```

Limpar os caches do Laravel:

```bash
docker compose --profile dev exec app-dev php artisan optimize:clear
```

Limpar o cache dos assets do Backpack após alterar CSS ou JavaScript:

```bash
docker compose --profile dev exec app-dev php artisan basset:clear
```

Executar os seeders novamente:

```bash
docker compose --profile dev exec app-dev php artisan db:seed
```

Os seeders são idempotentes e não devem duplicar usuários, roles ou permissões.

## Testes e qualidade

Executar todos os testes:

```bash
docker compose --profile dev exec app-dev php artisan test
```

Formatar o código:

```bash
docker compose --profile dev exec app-dev vendor/bin/pint
```

Validar uma instalação completamente nova:

```bash
docker compose --profile dev exec app-dev php artisan migrate:fresh --seed
```

> `migrate:fresh` apaga todas as tabelas. Use somente em um banco descartável de desenvolvimento ou teste.

## Convenções visuais

- Views administrativas customizadas: `resources/views/admin`.
- CSS global do painel: `resources/css/backpack`.
- Paleta oficial e tokens do painel: `resources/css/backpack/theme.css`.
- JavaScript global: `resources/js/backpack`.
- Assets do tema: `config/backpack/theme-tabler.php`.
- Ícones das listagens: `app/Enums/CrudListIcon.php`.
- Filtros das listagens: `app/Traits/HasCrudListFilters.php`.

Para adaptar a identidade visual de um novo projeto, altere primeiro no `theme.css`:

- `--starter-system-primary` e `--starter-system-primary-rgb`: cor principal do Backpack.
- `--starter-accent`: ações e destaques da interface.
- `--starter-success`, `--starter-warning` e `--starter-danger`: estados do sistema.
- `--starter-card`, `--starter-input`, `--starter-ink` e `--starter-line`: superfícies e contraste.

O arquivo possui valores separados para os temas claro e escuro. Os CSSs dos componentes consomem esses tokens; não é necessário procurar e substituir cores em cada tela. Depois de alterar estilos do painel, execute `php artisan basset:clear` no container.

Depois de alterar assets do painel, execute `php artisan basset:clear` dentro do container.

## Documentação detalhada

- [Docker e ambiente local](docs/docker.md)
- [Arquitetura do projeto](docs/architecture.md)
- [Backpack e CRUDs](docs/backpack.md)
- [Padrão para criar CRUD](docs/crud-pattern.md)
- [Filtros customizados](docs/filters.md)
- [Permissões](docs/permissions.md)
- [Uploads e Media Library](docs/media-library.md)
- [Qualidade de código](docs/quality.md)
- [Activitylog e auditoria](docs/activitylog.md)
- [Backups](docs/backup.md)
- [Realtime com Reverb](docs/realtime.md)

## Produção

Antes de publicar um projeto derivado desta base:

- substitua as credenciais padrão dos seeders;
- configure `APP_ENV=production` e `APP_DEBUG=false`;
- configure banco, Redis, filas, e-mail, Reverb e backups;
- execute migrations e testes;
- gere os caches adequados ao ambiente;
- confirme a matriz de permissões do projeto real.
