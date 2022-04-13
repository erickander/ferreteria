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
Route::get('/permisos/edit/{per_id}', 'permisosController@edit')->name('permisos.edit');
Route::post('/permisos/update{per_id}', 'permisosController@update')->name('permisos.update');
Route::post('/permisos/destroy{per_id}', 'permisosController@destroy')->name('permisos.destroy');
//productos
Route::get('/productos', 'productosController@index')->name('productos');
Route::get('/productos/create', 'productosController@create')->name('productos.create');
Route::post('/productos/store', 'productosController@store')->name('productos.store');
Route::get('/productos/edit/{per_id}', 'productosController@edit')->name('productos.edit');
Route::post('/productos/update{per_id}', 'productosController@update')->name('productos.update');
Route::post('/productos/destroy{per_id}', 'productosController@destroy')->name('productos.destroy');


