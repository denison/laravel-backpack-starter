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
docker compose exec -T app-dev composer format:test
docker compose exec app-dev composer test
```

Atalhos com Makefile:

```bash
make pint
make pint-test
make analyse
make test
make check
```

O `make check` roda, em sequencia:

```bash
composer format:test
composer analyse
composer test
```

Quando Larastan estiver configurado:

```bash
docker compose exec app-dev composer analyse
```

## Rodando Larastan

O arquivo de configuracao fica em:

```text
phpstan.neon
```

O starter comeca no nivel `1` para pegar erros simples sem travar a evolucao inicial do projeto.

Rodar analise estatica:

```bash
docker compose exec app-dev composer analyse
```

Se quiser ver mais detalhes diretamente:

```bash
docker compose exec app-dev ./vendor/bin/phpstan analyse --memory-limit=512M
```

O limite de memoria no comando evita falhas em projetos Laravel maiores, onde o PHPStan/Larastan precisa carregar bastante contexto do framework e dos pacotes.

## Git Hook de Pre-commit

O projeto possui um hook versionado em:

```text
scripts/git-hooks/pre-commit
```

Esse hook roda antes do commit e formata o codigo com Pint:

```bash
docker compose exec -T app-dev composer format
```

Para ativar na sua maquina:

```bash
cp scripts/git-hooks/pre-commit .git/hooks/pre-commit
chmod +x .git/hooks/pre-commit
```

Depois disso, sempre que voce rodar:

```bash
git commit
```

o Git vai executar o hook. Se o Pint encontrar arquivos fora do padrao, ele vai autoformatar os arquivos e bloquear o commit para voce revisar as mudancas.

Depois de revisar, adicione os arquivos formatados e tente o commit novamente:

```bash
git add .
git commit
```

Observacao: a pasta `.git/hooks` nao e versionada. Por isso o starter guarda o hook em `scripts/git-hooks/pre-commit` e cada ambiente precisa copiar esse arquivo uma vez.

## Git Hook de Pre-push

O projeto tambem possui um hook versionado em:

```text
scripts/git-hooks/pre-push
```

Esse hook roda antes do push e executa validacoes mais pesadas:

```bash
docker compose exec -T app-dev composer analyse
docker compose exec -T app-dev composer test
```

Para ativar na sua maquina:

```bash
cp scripts/git-hooks/pre-push .git/hooks/pre-push
chmod +x .git/hooks/pre-push
```

Depois disso, sempre que voce rodar:

```bash
git push
```

o Git vai executar a analise estatica e os testes. Se algum comando falhar, o push sera bloqueado.

## PHPStan / Larastan

PHPStan faz analise estatica: ele le o codigo sem executar o sistema e aponta problemas como chamadas para metodos inexistentes, tipos errados, retornos invalidos e variaveis suspeitas.

Larastan adiciona conhecimento de Laravel ao PHPStan, entendendo melhor models, facades, collections, containers e helpers do framework.

Para starter, comece com nivel baixo e aumente com o tempo. O objetivo inicial e pegar erros reais sem travar a evolucao do projeto.
