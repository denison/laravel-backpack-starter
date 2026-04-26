# Qualidade de Codigo

Este starter usa ferramentas simples para manter o codigo consistente e facilitar manutencao.

## Laravel Pint

Laravel Pint e o formatador oficial do Laravel. Ele ajusta estilo de codigo automaticamente: espacos, imports, quebras de linha e padroes comuns do ecossistema Laravel.

Rodar formatando os arquivos:

```bash
docker compose exec app-dev ./vendor/bin/pint
```

Rodar apenas verificando, sem alterar arquivos:

```bash
docker compose exec app-dev ./vendor/bin/pint --test
```

O Pint nao roda sozinho por padrao. Para automatizar, use uma destas estrategias:

- Script Composer antes de commits.
- Hook de Git com `pre-commit`.
- Pipeline de CI quando o projeto estiver em repositorio remoto.

## Testes

O projeto usa PHPUnit pelo comando nativo do Laravel:

```bash
docker compose exec app-dev php artisan test
```

O ambiente de teste esta configurado no `phpunit.xml` para usar SQLite em memoria:

```xml
<env name="DB_CONNECTION" value="sqlite"/>
<env name="DB_DATABASE" value=":memory:"/>
```

Isso deixa os testes rapidos e isolados do banco local.

## Scripts Composer

Os scripts recomendados para o dia a dia sao:

```bash
docker compose exec app-dev composer format
docker compose exec app-dev composer format:test
docker compose exec app-dev composer test
```

Quando Larastan estiver configurado:

```bash
docker compose exec app-dev composer analyse
```

## PHPStan / Larastan

PHPStan faz analise estatica: ele le o codigo sem executar o sistema e aponta problemas como chamadas para metodos inexistentes, tipos errados, retornos invalidos e variaveis suspeitas.

Larastan adiciona conhecimento de Laravel ao PHPStan, entendendo melhor models, facades, collections, containers e helpers do framework.

Para starter, comece com nivel baixo e aumente com o tempo. O objetivo inicial e pegar erros reais sem travar a evolucao do projeto.
