<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $regras = [
            'email' => 'required|email|unique:users,email'
           ];

           $mensagem = [
            'email.unique' => 'Endereço já cadastrado. Por favor, use outro email!'
           ];

        $user = $request->all();
        $request->validate($regras);
        $user['password'] = bcrypt($request->password);
        $user = User::create($user);

        Auth::login($user);

        return redirect()->route('conteudo');

        // área de envio de imagem de perfil
    
    }


    // área de envio de imagem de perfil


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
