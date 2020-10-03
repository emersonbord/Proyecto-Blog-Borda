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

Route::get('/post', function () {
    return view('post');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('administracion', 'Admin\\AdminController@index');