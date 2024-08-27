# Projeto de Gestão de Empresas e Sócios

Este projeto é uma aplicação Symfony para gerenciar empresas e seus sócios. O sistema permite a criação, atualização, listagem e exclusão de empresas e sócios.

## Instalação e Configuração

Para instalar e configurar o projeto, siga os passos abaixo:

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git && \
cd seu-repositorio && \
composer install && \
sed -i 's/DATABASE_URL=".*"/DATABASE_URL="mysql:\/\/usuario:senha@127.0.0.1:3306\/nome_do_banco?serverVersion=8.0"/' .env && \
php bin/console doctrine:database:create && \
php bin/console doctrine:migrations:migrate && \
symfony server:start
