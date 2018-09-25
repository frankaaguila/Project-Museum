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
/* Ejemplos:
Route::get('prueba',function(){
	return "Holi :3";
});

Route::get('nombre/{nombre}', function($nombre){
	return "Mi nombre es ".$nombre;
});
*/

Route::get('controlador','PruebaController@index');
Route::get('name/{nombre}','PruebaController@nombre');
Route::resource('image','ImageController');

Route::get('/', function () {
    return view('welcome');
});
