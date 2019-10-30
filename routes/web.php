<?php


    Route::get('/', function () {
        return view('welcome');
    });
   
    Route::get('formulario', function(){
        return view('formulario');
    });

    Auth::routes();

    Route::get('/', 'Home\HomeController@index')->name('home.index');


    Route::get('/Painel', 'Painel\PainelController@index')->name('painel.index');
    Route::get('viewClientes', 'Painel\PainelController@viewClientes')->name('painel.Clientes.index');
    Route::get('deleteClientes','Painel\PainelController@deleteClientes')->name('painel.clientes.delete');
    Route::get('/Painel/Clientes/Atualizar/{id}', 'Painel\PainelController@editarClientes')->name('painel.clientes.editar');

    Route::get('/Painel/Produtos', 'Produtos\ProdutosController@viewProdutos')->name('painel.Produtos.index');
    Route::get('/Painel/Produtos/excluir/{id}', 'Produtos\ProdutosController@deleteProdutos')->name('painel.Produtos.delete');
    Route::put('/Painel/Produtos/atualizar/{id}', 'Produtos\ProdutosController@editarProdutos')->name('painel.Produtos.editar');