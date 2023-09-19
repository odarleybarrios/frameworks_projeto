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
Route::get('usuario', 'App\Http\Controllers\UsuarioControler@verPost');

Route::get('usuario', 'App\Http\Controllers\UsuarioControler@index');

Route::get('usuario/{id}', 'App\Http\Controllers\UsuarioControler@show');

Route::get('usuario/{id}', 'App\Http\Controllers\UsuarioControler@delete');

Route::post('novo-usuario', 'App\Http\Controllers\UsuarioControler@salvarUsuario');

Route::get('novo-usuario', 'App\Http\Controllers\UsuarioControler@novoUsuario');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/t', function () {
    return view('welcome');
});



