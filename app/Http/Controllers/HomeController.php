<?php
namespace App\Http\Controllers;
use App\Models\Livros;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function MostrarHome(){
        return view('home');
    }

    public function MostrarLivros(Request $request){

        $registrosL = Livros::query();
        $registrosL->when($request->nomeLivro,function($query, $vl){
            $query->where('nomeLivro','like','%'.$vl.'%');
        });

        $registrosL = $registrosL->get();


        return view('home',[
            'registrosL' => $registrosL
        ]);
       
    }

}