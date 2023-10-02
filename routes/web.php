<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ListaEleccionController;

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

Route::get('/registro-eleccion', 'EleccionController@create')->name('layouts.registroeleccion');

Route::post('/registro-eleccion', 'EleccionController@store')->name('layouts.store');


Route::get('/elecciones', [ListaEleccionController::class, 'index'])->name('layouts.listaEleccion');
//Route::post('/elecciones', ['ListaEleccionController@store'])->name('layouts.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
