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

Route::get('/register', 'AuthController@register');

Route::post('/welcome', 'AuthController@welcome');

Route::get('/', function()
{
    return view('newIndex');
});

Route::get('/data-tables', function()
{
    return view('dataTables');
});

Route::get('/pertanyaan', 'pertanyaanController@index');

Route::get('/pertanyaan/create', 'pertanyaanController@create');

Route::post('/pertanyaan', 'pertanyaanController@store');

Route::get('jawaban/{id}', 'jawabanController@index');

Route::post('jawaban/{id}', 'jawabanController@store');