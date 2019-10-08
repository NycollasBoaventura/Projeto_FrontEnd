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

            'base_uri' => 'http://192.168.0.46:8080/produtos/',
            
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
       return view('Painel.Clientes.index', compact('user','response_array'));

    }
}
