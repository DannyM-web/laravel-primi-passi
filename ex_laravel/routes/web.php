<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $navbar = ['Chi siamo', "Contatti", "Catalogo"];
    $footer = ['Link', 'Tools', 'Lavora con noi', 'Sponsor', 'Marketing','Copyright'];
    return view('welcome', compact('navbar', 'footer'));
});

Route::get('/home', function () {

    return view('home');
});
