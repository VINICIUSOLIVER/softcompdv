<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('teste');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'middleware' => 'auth',
    'prefix' => 'clientes'
], function() {
    Route::get("/", "ClientesController@listagem");
});
