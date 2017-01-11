<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| POST, GET, PUT, DELETE
*/

Route::get('/','FrontController@index');
Route::resource('sig','FrontController@sig');//para renombrar cambiar FrontController, las redirecciones que contengan las vistas y LogController. 
Route::get('admin','FrontController@admin');


Route::resource('usuario','usuariocontroller');

Route::resource('log','LogController');

Route::get('logout','LogController@logout');

Route::get('form_cargar_datos_usuarios', 'usuariocontroller@form_cargar_datos_usuarios');
Route::resource('cargar_datos_usuarios', 'usuariocontroller@cargar_datos_usuarios');



Route::resource('informante','InformanteController');
Route::POST('informante/cargar_datos_informante', 'InformanteController@cargar_datos_informante');
Route::resource('informantes','InformanteController@locamodal');




Route::resource('tpinforcamps','tpinforcampsController');
Route::resource('informantescamp','tpinforcampsController@locamodal');

