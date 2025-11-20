<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'middleware' => 'auth',
    'prefix' => 'clientes'
], function() {
    Route::get("/", "ClientesController@listagem");
    Route::get("/novo", "ClientesController@formulario");
    Route::get("/{id}/editar", "ClientesController@formulario");
    Route::post("/salvar", "ClientesController@salvar");
    Route::delete("/{id}/excluir", "ClientesController@excluir");
});
