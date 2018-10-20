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

Route::get('/hello', function() {
    return view('hello', [
        'nama' => 'Halo Laravel Pertamaku!',
    ]);
});

Route::get('/home', 'Home@index');
Route::get('/home/create', 'Home@create');
Route::get('/home/view/{id}', 'Home@view');
Route::get('/home/update/{id}', 'Home@update');
Route::get('/home/delete/{id}', 'Home@delete');
Route::get('/rumah', 'Rumah@index');