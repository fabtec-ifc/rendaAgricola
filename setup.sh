#!/bin/bash

set -e

echo "Iniciando os contêineres do Laravel Sail..."
./vendor/bin/sail up -d

echo "Instalando dependências do Node.js..."
./vendor/bin/sail npm install

echo "Compilando assets com Vite..."
./vendor/bin/sail npm run build

echo "Executando migrações..."
./vendor/bin/sail artisan migrate:fresh

echo "Executando seeders..."
./vendor/bin/sail artisan db:seed

echo "Configuração concluída com sucesso!"
