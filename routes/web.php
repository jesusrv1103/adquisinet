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






Route::get('/', 'Admin\AdminController@index')->name('admin');

Route::group([
  'prefix' => 'admin',
  'namespace' => 'Admin',
  'middleware' => 'auth'
], function () {

  Route::get('/', 'AdminController@index')->name('admin.index');

  //Rutas de productos
  Route::get('productos', 'ProductosController@index')->name('admin.productos.index');
  Route::get('productos/create', 'ProductosController@create')->name('admin.productos.create');
  Route::post('productos', 'ProductosController@store')->name('admin.productos.store');
  Route::get('productos/{producto}/edit', 'ProductosController@edit')->name('admin.productos.edit');
  Route::put('productos/{producto}', 'ProductosController@update')->name('admin.productos.update');
  Route::delete('productos/{producto}', 'ProductosController@destroy')->name('admin.productos.destroy');

//Rutas de marcas
  Route::get('marcas', 'MarcasController@index')->name('admin.marcas.index');
  Route::get('marcas/create', 'MarcasController@create')->name('admin.marcas.create');
  Route::post('marcas', 'MarcasController@store')->name('admin.marcas.store');
  Route::get('marcas/{marca}/edit', 'MarcasController@edit')->name('admin.marcas.edit');
  Route::put('marcas/{marca}', 'MarcasController@update')->name('admin.marcas.update');
  Route::delete('marcas/{marca}', 'MarcasController@destroy')->name('admin.marcas.destroy');


  //Rutas de giros
  Route::get('giros', 'GirosController@index')->name('admin.giros.index');
  Route::get('giros/create', 'GirosController@create')->name('admin.giros.create');
  Route::post('giros', 'GirosController@store')->name('admin.giros.store');
  Route::get('giros/{giro}/edit', 'GirosController@edit')->name('admin.giros.edit');
  Route::put('giros/{giro}', 'GirosController@update')->name('admin.giros.update');
  Route::delete('giros/{giro}', 'GirosController@destroy')->name('admin.giros.destroy');

   //Rutas de impuestos
   Route::get('impuestos', 'ImpuestosController@index')->name('admin.impuestos.index');
   Route::get('impuestos/create', 'ImpuestosController@create')->name('admin.impuestos.create');
   Route::post('impuestos', 'ImpuestosController@store')->name('admin.impuestos.store');
   Route::get('impuestos/{impuesto}/edit', 'ImpuestosController@edit')->name('admin.impuestos.edit');
   Route::put('impuestos/{impuesto}', 'ImpuestosController@update')->name('admin.impuestos.update');
   Route::delete('impuestos/{impuesto}', 'ImpuestosController@destroy')->name('admin.impuestos.destroy');

   //Rutas de unidades
   Route::get('unidades', 'UnidadesController@index')->name('admin.unidades.index');
   Route::get('unidades/create', 'UnidadesController@create')->name('admin.unidades.create');
   Route::post('unidades', 'UnidadesController@store')->name('admin.unidades.store');
   Route::get('unidades/{unidad}/edit', 'UnidadesController@edit')->name('admin.unidades.edit');
   Route::put('unidades/{unidad}', 'UnidadesController@update')->name('admin.unidades.update');
   Route::delete('unidades/{unidad}', 'UnidadesController@destroy')->name('admin.unidades.destroy');

   //Rutas de Mensajes
   Route::get('mensajes', 'MensajesController@index')->name('admin.mensajes.index');
   Route::get('mensajes/create', 'MensajesController@create')->name('admin.mensajes.create');
   Route::post('mensajes', 'MensajesController@store')->name('admin.mensajes.store');
   Route::get('mensajes/{mensaje}/edit', 'MensajesController@edit')->name('admin.mensajes.edit');
   Route::put('mensajes/{mensaje}', 'MensajesController@update')->name('admin.mensajes.update');
   Route::delete('mensajes/{mensaje}', 'MensajesController@destroy')->name('admin.mensajes.destroy');
   //Rutas de Usuarios
   Route::get('usuarios', 'UsuariosController@index')->name('admin.usuarios.index');
   Route::get('usuarios/create', 'UsuariosController@create')->name('admin.usuarios.create');
   Route::post('usuarios', 'UsuariosController@store')->name('admin.usuarios.store');
   Route::get('usuarios/{usuarios}/edit', 'UsuariosController@edit')->name('admin.usuarios.edit');
   Route::put('usuarios/{usuarios}', 'UsuariosController@update')->name('admin.usuarios.update');
   Route::delete('usuarios/{usuarios}', 'UsuariosController@destroy')->name('admin.usuarios.destroy');

    //Rutas de partidas
    Route::get('partidas', 'PartidasController@index')->name('admin.partidas.index');
    Route::get('partidas/create', 'PartidasController@create')->name('admin.partidas.create');
    Route::post('partidas', 'PartidasController@store')->name('admin.partidas.store');
    Route::get('partidas/{Partida}/edit', 'PartidasController@edit')->name('admin.partidas.edit');
    Route::put('partidas/{Partida}', 'PartidasController@update')->name('admin.partidas.update');
    Route::delete('partidas/{Partida}', 'PartidasController@destroy')->name('admin.partidas.destroy');



    //ProveedorController

    //Rutas de Proveedores
    Route::get('proveedores', 'ProveedorController@index')->name('admin.proveedores.index');
    Route::get('proveedores/create', 'ProveedorController@create')->name('admin.proveedores.create');
    Route::post('proveedores', 'ProveedorController@store')->name('admin.proveedores.store');
    Route::get('proveedores/{Proveedor}/edit', 'ProveedorController@edit')->name('admin.proveedores.edit');
    Route::put('proveedores/{Proveedor}', 'ProveedorController@update')->name('admin.proveedores.update');
    Route::delete('proveedores/{Proveedor}', 'ProveedorController@destroy')->name('admin.proveedores.destroy');



    ///Zonas geograficas

     //Rutas de municipios
     Route::get('municipios', 'MunicipioController@index')->name('admin.municipios.index');
     Route::get('municipios/create', 'MunicipioController@create')->name('admin.municipios.create');
     Route::post('municipios', 'MunicipioController@store')->name('admin.municipios.store');
     Route::get('municipios/{Municipio}/edit', 'MunicipioController@edit')->name('admin.municipios.edit');
     Route::put('municipios/{Municipio}', 'MunicipioController@update')->name('admin.municipios.update');
     Route::delete('municipios/{Municipio}', 'MunicipioController@destroy')->name('admin.municipios.destroy');

     //Rutas de partidas
    Route::get('estados', 'EstadoController@index')->name('admin.estados.index');
    Route::get('estados/create', 'EstadoController@create')->name('admin.estados.create');
    Route::post('estados', 'EstadoController@store')->name('admin.estados.store');
    Route::get('estados/{Estado}/edit', 'EstadoController@edit')->name('admin.estados.edit');
    Route::put('estados/{Estado}', 'EstadoController@update')->name('admin.estados.update');
    Route::delete('estados/{Estado}', 'EstadoController@destroy')->name('admin.estados.destroy');





});


Auth::routes();
