# Sistema de Usuários com Blade (Laravel)

Exercício da apostila de Blade: listagem, detalhe e cadastro de usuários.

## Como executar
```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```
Acesse http://localhost:8000/users
