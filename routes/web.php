<?php


    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/', 'Home\HomeController@index')->name('home.index');


    Route::get('/Painel', 'Painel\PainelController@index')->name('painel.index');
    Route::get('/Painel/Clientes', 'Painel\PainelController@viewClientes')->name('painel.Clientes.index');
    Route::get('/Painel/Clientes/excluir/{$id}','Painel\PainelController@deleteClientes')->name('painel.clientes.delete');
    Route::get('/Painel/Clientes/atualizar/{$id}', 'Painel\ProdutosController@editarClientes')->name('painel.clientes.editar');
    
    Route::get('/Painel/Produtos', 'Produtos\ProdutosController@viewProdutos')->name('painel.Produtos.index');
    Route::get('/Painel/Produtos/excluir/{id}', 'Produtos\ProdutosController@deleteProdutos')->name('painel.Produtos.delete');
    Route::get('/Painel/Produtos/atualizar/{id}', 'Produtos\ProdutosController@editarProdutos')->name('painel.Produtos.editar');