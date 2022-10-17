# Laravel Sail + Laravel Horizon

Neste projeto vamos fazer a instalação do zero do Laravel Sail com o Laravel Horizon. Após isso iremos dar start nas queue e faremos o processamento de jobs.
Por fim visualizaremos o painel do Laravel Horizon junto de todas suas configurações e opções de métricas que estão disponíveis para o acompanhamento dos Jobs em nossa aplicação.

# Comandos Utilizados

> curl -s "https://laravel.build/example-app?with=mysql,redis" | bash

> sail up -d

> sail artisan about

> sail composer require laravel/horizon

> sail artisan horizon:install

> sail bash

> supervisorctl

> exit

> sail artisan horizon

.env
QUEUE_CONNECTION=redis
