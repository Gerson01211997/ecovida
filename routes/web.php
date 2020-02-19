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
    return view('home');
});

Route::get('/Acerca-de-nosotros', function () {
    return view('about');
});

Route::get('/Servicios', function () {
    return view('services');
});

Route::get('/Contacto', function () {
    return view('contact');
});

Route::get('/Reseña', function () {
    return view('history');
});