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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','PlayersController@index' )->name('home');


Route::get('/club', function () {
    return view('club');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/plantilla','PlayersController@plantilla' )->name('plantilla');

Route::get('/jugadores/{id}','PlayersController@edit' )->name('jugadores');

Route::get('/liga','PlayersController@liga' )->name('liga');

Route::get('/agenda', function () {
    return view('agenda');
});

Route::get('/sponsors', function () {
    return view('sponsors');
});