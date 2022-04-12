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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 
//permisos
Route::get('/permisos', 'permisosController@index')->name('permisos');
Route::get('/permisos/create', 'permisosController@create')->name('permisos.create');
Route::post('/permisos/store', 'permisosController@store')->name('permisos.store');
Route::get('/permisos/edit/{tip_id}', 'permisosController@edit')->name('permisos.edit');
Route::post('/permisos/update{tip_id}', 'permisosController@update')->name('permisos.update');
Route::post('/permisos/destroy{tip_id}', 'permisosController@destroy')->name('permisos.destroy');
//productos


