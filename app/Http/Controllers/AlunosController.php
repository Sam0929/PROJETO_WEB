<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Redirect;
class AlunosController extends Controller

{
    public function index01(){

        return view ('welcome');
    }
    
    public function index(){
        $Alunos = Aluno::get();

        return view ('alunos.alunos',['Alunos' => $Alunos]);
    }

    public function new (){

        return view ('CRUD.create');
    }

    public function add (Request $request){

        $Aluno = new Aluno;
        $Aluno = $Aluno-> create($request -> all());
        
        return redirect::to('alunos');
    }
    public function edit ($id) {
        $Aluno = Aluno::findOrFail($id);
        return view('CRUD.create', ['Aluno' => $Aluno]);
    }
    
    public function update($id, Request $request){
        
        $Aluno = Aluno::findOrFail ($id);
        $Aluno -> update ($request -> all());
        
        return redirect::to('alunos');


    }
    public function delete($id){
        $Aluno = Aluno::findOrFail ($id);
        $Aluno -> delete();
        return redirect::to('alunos');
    }
}

