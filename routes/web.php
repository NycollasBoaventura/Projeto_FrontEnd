<?php

    use GuzzleHttp\Client;
    
    Route::get('/Painel', function () {
    
        $client = new Client([
    
            'base_uri' => 'http://192.168.0.39:8080/produtos/',
            'timeout'  => 20,0,
    
        ]);

        $response = $client->request('GET', 'lista');
        
       return json_decode($response->getBody()->getContents());
        
        return view('lista.index', compact());
    });



    Auth::routes();

    Route::get('/', 'Home\HomeController@index')->name('home.index');
    Route::get('/Painel/Clientes', 'Painel\PainelController@viewClientes')->name('painel.Clientes.index');

