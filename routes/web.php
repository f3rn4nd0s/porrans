<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba/{id}', function ($id) {
    return 'Prueba de Parámetro: Número ' . $id;
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
