<?php

namespace App\Http\Controllers\produtos;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class ProdutosController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $request;
    public $Produtos;

    public function __construct(Request $request, User $Produtos)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->produtos = $Produtos;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth() ->User();
        return view('Painel.index', compact('user'));
    }
    public function viewProdutos()
    {
        $client = new Client([

            'base_uri' => 'http://192.168.0.50:8080/produtos/',
            
            'timeout' => 30,
    
    
        ]);
    
        $response = $client->request('GET', 'lista');
        $response_array = json_decode($response->getBody()->getContents());
        //return $response_array;
       /* foreach($response_array as $row){
            print_r($row);
            echo "-------------------- <hr>";
        }*/
       //return json_decode($response->getBody()->getContents());
       $user = Auth() ->User();
       return view('Painel.Produtos.index', compact('user','response_array'));

    }
    public function deleteProdutos($id)
    {
        $client = New Client([
            'base_uri'=> 'http://192.168.0.50:8080/produtos/',
            'timeout'=>30,
        ]);
        $response = $client->delete('GET', 'excluir/{id}');
    

        $user = Auth() ->User();
        return view('Painel.Produtos.index', compact('user','response'));
    }
}

