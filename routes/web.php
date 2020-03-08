<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/jurusan', 'JurusanController@index');
Route::get('/jurusan/create', 'JurusanController@create');
Route::get('/jurusan/{jurusan}', 'JurusanController@show');
Route::resource('/jurusan','JurusanController');
Route::post('/jurusan', 'JurusanController@store');
Route::delete('/jurusan/{jurusan}', 'JurusanController@destroy');
Route::get('/jurusan/{jurusan}/edit', 'JurusanController@edit');
Route::patch('/jurusan/{jurusan}', 'JurusanController@update');