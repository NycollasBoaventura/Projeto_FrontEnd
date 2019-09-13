<?php

namespace App\Http\Controllers\painel;
use App\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        //Controle de url
        $user = Auth()->User();
        $uri = $this->request->route()->uri();
        $exploder = explode('/', $uri);
        $urlAtual = $exploder[1];

        $clientes = $this->clientes->all();

        return view('Painel.Clientes.index', compact('user', '$urlAtual', 'clientes' ));
    }
}
