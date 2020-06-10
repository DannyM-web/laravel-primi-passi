<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $navbar = ['Chi siamo', "Contatti", "Catalogo"];
    $footer = ['Link', 'Tools', 'Lavora con noi', 'Sponsor', 'Marketing','Copyright'];


    return view('main', compact('navbar', 'footer'));
});


Route::get('/pasta', function () {

  $cards = config('pasta');

  $collection = collect($cards)->map(function ($item, $key) {
    $item['id'] = $key;
    return $item;
});



  $lunga = $collection -> where('tipo','lunga');
  $corta = $collection -> where('tipo','corta');
  $cortissima = $collection -> where('tipo','cortissima');

    return view('mainPasta', compact('lunga','corta','cortissima'));
});

Route::get('/showpasta/{id}', function ($id) {

  $cards = config('pasta');

  $pasta = $cards[$id];

  return view('showPasta', compact('pasta'));
}) -> name('showPasta');
