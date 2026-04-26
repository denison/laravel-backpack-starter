DC = docker compose
APP = app-dev

.PHONY: up build down restart ps shell logs install migrate seed cache-clear basset-cache pint pint-test analyse test check

up:
	$(DC) --profile dev up

up-d:
	$(DC) --profile dev up -d

build:
	$(DC) --profile dev up -d --build

down:
	$(DC) --profile dev down

restart: down up

ps:
	$(DC) ps

shell:
	$(DC) exec $(APP) bash

logs:
	$(DC) logs -f

install:
	$(DC) exec $(APP) composer install

migrate:
	$(DC) exec $(APP) php artisan migrate

seed:
	$(DC) exec $(APP) php artisan db:seed

cache-clear:
	$(DC) exec $(APP) php artisan optimize:clear

basset-cache:
	$(DC) exec $(APP) php artisan basset:cache

pint:
	$(DC) exec $(APP) composer format

pint-test:
	$(DC) exec $(APP) composer format:test

analyse:
	$(DC) exec $(APP) composer analyse

test:
	$(DC) exec $(APP) composer test

check:
	$(DC) exec $(APP) composer format:test
	$(DC) exec $(APP) composer analyse
	$(DC) exec $(APP) composer test
