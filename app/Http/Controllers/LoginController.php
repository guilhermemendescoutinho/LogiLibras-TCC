<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function logar(Request $request){
        $dados = $request -> validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ], [
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O email precisa ser válido',
            'password.required' => 'o campo senha é obrigatório'
        ]
    );

            if(Auth::attempt($dados)){
                $request -> session() -> regenerate();
                return redirect()->intended('conteudo');
            }
            else{
                return redirect()->back()->with('erro', 'Dados Inválidos');
            }
            }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }

    public function create(){
        return view('admin.create');
    }

}
