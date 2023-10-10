<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\EleccionController;
use App\Http\Controllers\VotanteController;
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

//Route::get('/elecciones', 'EleccionController@index');
Route::get('/elecciones/{id}/archivar', 'EleccionController@archivar');

Route::resource('elecciones', 'EleccionController');

//Route::get('/eleciones-creadas', 'EleccionController@index');

Route::get('/home', 'ConfirmacionController@index')->name('confirmacion');

Route::resource('votante', 'VotanteController');

//Route::get('/registro-votante', function () {
    //return view('votante.form');
//});