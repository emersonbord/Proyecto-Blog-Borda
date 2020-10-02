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