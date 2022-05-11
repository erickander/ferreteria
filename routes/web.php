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
Route::get('/catalogo', 'catalogoController@index')->name('catalogo');
 
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
//proveedor
Route::get('/proveedor', 'proveedorController@index')->name('proveedor');
Route::get('/proveedor/create', 'proveedorController@create')->name('proveedor.create');
Route::post('/proveedor/store', 'proveedorController@store')->name('proveedor.store');
Route::get('/proveedor/edit/{dor_id}', 'proveedorController@edit')->name('proveedor.edit');
Route::post('/proveedor/update{dor_id}', 'proveedorController@update')->name('proveedor.update');
Route::post('/proveedor/destroy{dor_id}', 'proveedorController@destroy')->name('proveedor.destroy');
//clientes
Route::get('/clientes', 'clientesController@index')->name('clientes');
Route::get('/clientes/create', 'clientesController@create')->name('clientes.create');
Route::post('/clientes/store', 'clientesController@store')->name('clientes.store');
Route::get('/clientes/edit/{cli_id}', 'clientesController@edit')->name('clientes.edit');
Route::post('/clientes/update{cli_id}', 'clientesController@update')->name('clientes.update');
Route::post('/clientes/destroy{cli_id}', 'clientesController@destroy')->name('clientes.destroy');
//usuarios
Route::get('/users', 'usersController@index')->name('users');
Route::get('/users/create', 'usersController@create')->name('users.create');
Route::post('/users/store', 'usersController@store')->name('users.store');
Route::get('/users/edit/{usu_id}', 'usersController@edit')->name('users.edit');
Route::post('/users/update{usu_id}', 'usersController@update')->name('users.update');
Route::post('/users/destroy{usu_id}', 'usersController@destroy')->name('users.destroy');
//inventario
Route::get('/inventario', 'inventarioController@index')->name('inventario');
Route::get('/inventario/create', 'inventarioController@create')->name('inventario.create');
Route::post('/inventario/store', 'inventarioController@store')->name('inventario.store');
Route::get('/inventario/edit/{inv_id}', 'inventarioController@edit')->name('inventario.edit');
Route::post('/inventario/update{inv_id}', 'inventarioController@update')->name('inventario.update');
Route::post('/inventario/destroy{inv_id}', 'inventarioController@destroy')->name('inventario.destroy');
//transacciones
Route::get('/transacciones', 'transaccionesController@index')->name('transacciones');
Route::get('/transacciones/create', 'transaccionesController@create')->name('transacciones.create');
Route::post('/transacciones/store', 'transaccionesController@store')->name('transacciones.store');
Route::get('/transacciones/edit/{tra_id}', 'transaccionesController@edit')->name('transacciones.edit');
Route::post('/transacciones/update{tra_id}', 'transaccionesController@update')->name('transacciones.update');
Route::post('/transacciones/destroy{tra_id}', 'transaccionesController@destroy')->name('transacciones.destroy');
//factura
Route::resource('factura','facturaController');
Route::post('/factura.detalle', 'facturaController@detalle')->name('factura.detalle');

