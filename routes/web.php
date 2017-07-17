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

Route::get('/', function () {
    return view('welcome');
});
Route::get('rutamiguel/{dia}','contromiguel@funcionmiguel');

Route::get('Registro','ElinorSabado@VerRegistro');

Route::post('registrar','ElinorSabado@GuardarRegistro');

Route::get('talento','TalentoController@index' );

Route::post('talento/guardar','TalentoController@save');

Route::get('cursos','CursosController@index1');

Route::post('cursos/guardar','CursosController@guardar');