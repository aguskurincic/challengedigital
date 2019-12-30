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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
// Route::get('/', 'HomeController@entry');
Route::get('/verListadoPeliculas', 'MovieController@index');
Route::post('/verPelicula', 'MovieController@show')->middleware('auth');
// Route::get('/verActores', 'ActorController@listado');
Route::get('/peliculaEncontrada', 'HomeController@buscar');
Route::get('/agregarPelicula', 'MovieController@cargar')->middleware('auth');
Route::post('/agregarPelicula', 'MovieController@store')->middleware('auth')->middleware('rol');
Route::post('/editarPelicula', 'MovieController@edit')->middleware('auth')->middleware('rol');
Route::post('/eliminarPelicula', 'MovieController@destroy')->middleware('auth')->middleware('rol');
Route::get('/verPerfil', 'UserController@index')->middleware('auth');
Route::post('/peliculaEditada', 'MovieController@update')->middleware('auth');
