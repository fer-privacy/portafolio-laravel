<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio');
});
Route::get('/Inicio', function () {
    return view('Inicio');
});
Route::get('/mi', function () {
    return view('SobreMi');
});
Route::get('/Porfolio', function () {
    return view('Porfolio');
});
Route::get('/Servicios', function () {
    return view('Servicios');
});
Route::get('/Blog', function () {
    return view('Blog');
});
Route::get('/Contacto', function () {
    return view('Contacto');
});
