<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index()
    {
        $lista = [
            "Barbara Sousa",
            "Angela Gomes",
            "Fulano Belquior",
            "Beltrano Olando",
            "Antonio Fagundes",
            "Angela Gomes",
            "Fulano Belquior",
            "Beltrano Olando",
            "Angela Gomes",
            "Fulano Belquior",
            "Beltrano Olando",
            "Angela Gomes",
            "Fulano Belquior",
            "Beltrano Olando",
            "Angela Gomes",
            "Fulano Belquior",
            "Beltrano Olando",
            "Angela Gomes",
            "Fulano Belquior",
            "Beltrano Olando",
        ];

        return view ('lista-contato')->with('lista', $lista);
    }

    public function create()
    {
        return view('formulario-adicionar');
    }
}
