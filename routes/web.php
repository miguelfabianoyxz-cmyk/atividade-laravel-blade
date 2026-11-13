<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('users.index');
});

Route::resource('users', UserController::class)
    ->only(['index', 'create', 'store', 'show']);

// Rota apenas para testar o componente de alerta
Route::get('/aviso', function () {
    return redirect()->route('users.index')
        ->with('sucesso', 'Teste do componente de alerta!');
});
