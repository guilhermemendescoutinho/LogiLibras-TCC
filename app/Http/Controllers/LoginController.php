<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logar(Request $request){
        $dados = $request -> validate([
            'email' => ['required', 'email'],
            'senha' => ['required']
        ]);

    if(Auth::attempt($dados)){
        $request -> session() -> regenerate();
        return redirect()->intended('conteudo');
    }
    else{
        return redirect()->back()->with('erro', 'Dados Inválidos');
    }
    }
}
