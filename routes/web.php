<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('usuarios', 'App\Http\Controllers\UsuarioControler@index')->name('usuario.listar');

Route::get('usuarios/novo', 'App\Http\Controllers\UsuarioControler@criar');

Route::get('usuarios/{id}', 'App\Http\Controllers\UsuarioControler@mostrar');

Route::get('usuarios/{id}/editar', 'App\Http\Controllers\UsuarioControler@editar');

Route::post('usuarios', 'App\Http\Controllers\UsuarioControler@salvar');

Route::put('usuarios/{id}', 'App\Http\Controllers\UsuarioControler@atualizar');






