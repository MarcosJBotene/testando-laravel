<?php

use Illuminate\Support\Facades\Route;

$dir = 'App\\Http\\Controllers\\';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/todos', $dir . 'ProdutosController@index')->name('lista->produtos');
