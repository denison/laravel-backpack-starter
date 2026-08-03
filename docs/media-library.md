# Uploads e Media Library

O projeto usa Spatie Media Library para anexos e imagens.

As colecoes iniciais sao:

- `avatar`: foto unica do usuario, com miniatura quadrada de 160 x 160 pixels;
- `logo`: logo unica da empresa, com miniatura proporcional de ate 240 x 160 pixels.

Os arquivos originais sao preservados. As miniaturas sao usadas no cabecalho e nas listagens para evitar transferir imagens grandes em telas administrativas.

## Padrao de Disco

- Local/desenvolvimento: `MEDIA_DISK=public`
- Producao com DigitalOcean Spaces: `MEDIA_DISK=spaces`

## Variaveis Principais

```env
PROJECT_SLUG=starter
MEDIA_DISK=public

DO_SPACES_KEY=
DO_SPACES_SECRET=
DO_SPACES_REGION=nyc3
DO_SPACES_BUCKET=
DO_SPACES_ENDPOINT=
DO_SPACES_URL=
```

## Path dos Arquivos

O path dos arquivos segue o padrao:

```text
{PROJECT_SLUG}/{Model}/{collection}/{model_id}/
```

Arquivo responsavel:

```text
app/Support/CustomPathGenerator.php
```

Os formularios aceitam JPG, PNG e WebP de ate 5 MB. Em armazenamento local, confirme que `php artisan storage:link` foi executado. O avatar local substitui o Gravatar; quando o usuario nao possui foto, o painel exibe a inicial do nome.
