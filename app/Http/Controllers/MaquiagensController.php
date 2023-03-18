<?php

namespace App\Http\Controllers;

use App\Models\Maquiagem;
use Illuminate\Http\Request;

class MaquiagensController extends Controller
{
    //*Lista todas as makes cadastradas */
    public function index ()
    {
        // Pega todos os registos da tabela relacionada ao modelo Make
        $maquiagens = Maquiagem::all();

        return view('maquiagens.index', compact('maquiagens'));
    }

    /* Mostra o formulário para criar uma nova make*/
    public function create()
    {
        //
    }

    /*Armazena uma nova make*/
    public function store(Request $request)
    {
        //
    }

     /* Mostra uma make específica*/
    public function show($id)
    {
        //
    }

     /* Mostra o formulário para editar uma make específica*/
    public function edit($id)
    {
        //
    }

    /* Atualiza uma make específica*/
    public function update(Request $request, $id)
    {
        //
    }

    /* Remove uma make específica */
    public function destroy($id)
    {

    }
}
