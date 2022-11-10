<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Livros;
use Illuminate\Support\Facades\Redirect;



class CadastrarController extends Controller

{

    public function MostrarCadastro()
    {

        return view('cadastro');

    }
    public function cadastrar(Request $request){
        $dadosL = $request->validate([
            'nomeLivro'=>'string|required',
            'autorLivro'=>'string|required',
            'dataLancamentoLivro'=>'string|required'
        ]);
        Livros::create($dadosL);
        return Redirect::route('home');

    }
    


}