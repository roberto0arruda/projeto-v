<?php

Route::get('/', function () {
    return view('site.home');
});
Route::get('/sobre', function () {
    return view('site.sobre');
});

//
//
//Route::group(['namespace' => 'Site'], function() {
//    Route::get('/categoria/{id}', 'SiteController@categoria');
//    Route::get('/contato', 'SiteController@contato');
//    Route::get('/', 'SiteController@index');
//});
//
//Route::resource('/painel/carros', 'Painel\CarroController');
//
//Route::resource('/clientes', 'ClienteController');
