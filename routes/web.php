<?php

Route::get('/', function () {
    return view('inicio');
});

Route::get('/acerca', function () {
    return view('acerca');
});

Route::get('/contacto', function () {
    return view('contacto');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
