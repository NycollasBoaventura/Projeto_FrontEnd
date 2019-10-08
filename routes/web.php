<?php


    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/', 'Home\HomeController@index')->name('home.index');


    Route::get('/Painel', 'Painel\PainelController@index')->name('painel.index');
    Route::get('/Painel/Clientes', 'Painel\PainelController@viewClientes')->name('painel.Clientes.index');
    