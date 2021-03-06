<?php

namespace App\Http\Controllers\painel;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class PainelController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $request;
    public $Clientes;

    public function __construct(Request $request, User $Clientes)
    {
        $this->middleware('auth');
        $this->request = $request;
        $this->clientes = $Clientes;
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
    public function viewClientes()
    {
        $client = new Client([

            'base_uri' => 'http://192.168.0.54:8080/clientes/lista',
            
            'timeout' => 30,
    
    
        ]);
    
        $response = $client->request('GET');
        $response_array = json_decode($response->getBody()->getContents());
        //return $response_array;
       /* foreach($response_array as $row){
            print_r($row);
            echo "-------------------- <hr>";
        }*/
       //return json_decode($response->getBody()->getContents());
       $user = Auth() ->User();
       return view('Painel.Clientes.index', compact('user','response_array'));

    }
    public function deleteClientes($id)
    {
        $client = New Client([
            'base_uri'=> 'http://192.168.0.54:8080/clientes/excluir/{id}',
            'timeout'=>30,
        ]);
        $response = $client->delete('GET');
    

        $user = Auth() ->User();
        return view('Painel.Clientes.index', compact('user','response'));
    }
    public function editarClientes($id)
    {
    $client = New Client([
        'base_uri'=> 'http://192.168.0.54:8080/clientes/',
        'timeout'=>30,
    ]);      
    $response = $client->update('GET','atualizar/{id}');
        $client->nome = "";
        $client->cpf = "";
        $client->rg = "";
        $categorias = Categoria::all();
        return view('Painel.Clientes.formulario', compact('user','response'));

    }
    public function formulario(){
        
    }
    
}
