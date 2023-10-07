<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('inicio');
});


Route::get('/lista', function () {
    return view('lista');
});

Route::get('/registrar', function () {
    return view('registrar');
});

Route::get('/votantes', function () {
    return view('votantes');
});

Route::get('/comite', function () {
    return view('comite');
});