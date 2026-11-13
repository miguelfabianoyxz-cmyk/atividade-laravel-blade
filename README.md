# Sistema de Usuários com Blade (Laravel)

Exercício prático da *Apostila de Blade Templates no Laravel*: listagem, detalhe e cadastro de usuários.

## Recursos de Blade utilizados
- Layout mestre (`@extends`, `@yield`, `@section`) em `resources/views/layouts/app.blade.php`
- Partials (`@include`): `partials/menu` e `partials/rodape`
- Componentes: `<x-alerta>` (`@props`, `$slot`, `$attributes`) e `<x-form.input>`
- `@forelse`, `$loop`, `@if/@else`, `@switch`, `@php`
- Formulário com `@csrf`, `@error` e `old()`
- `@push` / `@stack`
- Desafios extras 1 a 5 implementados

## Como executar
```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan tinker --execute="App\Models\User::factory()->count(5)->create();"
php artisan serve
```
Acesse http://localhost:8000/users

## Rotas
| Método | URI | Nome |
|---|---|---|
| GET | /users | users.index |
| GET | /users/create | users.create |
| POST | /users | users.store |
| GET | /users/{user} | users.show |
| GET | /aviso | teste do componente de alerta |
