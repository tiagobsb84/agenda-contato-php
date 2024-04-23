<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\contatos;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $lista = contatos::all();

        return view ('lista-contato')->with('lista', $lista);
    }

    public function create()
    {
        return view('formulario-adicionar');
    }

    public function store(Request $request) 
    {
        $request->validate([
            'email'=> 'required|email'
        ]);

        contatos::create($request->all());

        return to_route('lista-contato.index');
    }
}
