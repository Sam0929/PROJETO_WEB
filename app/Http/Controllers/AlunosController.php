<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
class AlunosController extends Controller

{
    public function create()
{
    return view ('create');
}

    public function store(Request $request) 
{
        Aluno::create([
    
    'Nome' => $request-> Nome,
    'Matéria' => $request-> Matéria,
    'Professor' => $request-> Professor,
    'Filme' => $request-> Filme,
    'Descrição' => $request-> Descrição,
    
]);

  

    return "Aluno adicionado com sucesso!";
}


}

