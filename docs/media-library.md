# Uploads e Media Library

O projeto usa Spatie Media Library para anexos e imagens.

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
