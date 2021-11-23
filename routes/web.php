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
    return view('principal');
})->name('inicio');



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/gestion-animales', 'AnimalController@index')->name('gestion-animales');
Route::post('/registro-animal', 'AnimalController@create')->name('registro-animal');
Route::get('/gestion-corrales', 'CorralController@index')->name('gestion-corrales');
Route::post('/registro-corral', 'CorralController@create')->name('registro-corral');
Route::get('/asignacion-corrales', 'AsignacionController@index')->name('asignacion-corrales');
Route::post('/registro-asignacion', 'AsignacionController@create')->name('registro-asignacion');

Route::get('/visualizar-animales', 'CorralController@corralesAnimales')->name('visualizar-animales');
Route::get('/lista-animales', 'CorralController@listaAnimales')->name('lista-animales');

Route::get('/reporte-pdf', 'CorralController@reporteAnimales')->name('reporte-pdf');
