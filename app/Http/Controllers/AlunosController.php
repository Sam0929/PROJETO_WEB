<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Illuminate\Support\Facades\Http;
use Nette\Utils\Json;
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
        $filmes = array();

        $auxcategories =  Http::get('https://www.learn-laravel.cf/categories');
        $categories = json_decode($auxcategories, true);

        for($j=1; $j<7; $j++) {

            $api = Http::get('https://www.learn-laravel.cf/movies?page=' . $j);
            $auxjson = json_decode($api, true);
            $api = $auxjson['data'];

            foreach ($api as $filme){
                for($i=0 ; $i<6; $i++){
                    if($filme['category_id'] == $i+1){
                        $filmes[] = array(
                            'id' => $filme['id'], 
                            'nome' => $filme['name'],
                            'category' => $categories[$i]['name']);
                    }
                }
            };
        }
        
        return view ('CRUD.create', ['filmes' => $filmes]);
    }

    public function add (Request $request){

        $Aluno = new Aluno;
        $Aluno = $Aluno-> create($request -> all());
        
        return redirect::to('alunos');
    }
    public function edit ($id) {
        $Aluno = Aluno::findOrFail($id);
        $filmes = array();

        $auxcategories =  Http::get('https://www.learn-laravel.cf/categories');
        $categories = json_decode($auxcategories, true);

        for($j=1; $j<7; $j++) {

            $api = Http::get('https://www.learn-laravel.cf/movies?page=' . $j);
            $auxjson = json_decode($api, true);
            $api = $auxjson['data'];

            foreach ($api as $filme){
                for($i=0 ; $i<6; $i++){
                    if($filme['category_id'] == $i+1){
                        $filmes[] = array(
                            'id' => $filme['id'], 
                            'nome' => $filme['name'],
                            'category' => $categories[$i]['name']);
                    }
                }
            };
        }
        
        return view('CRUD.create', ['Aluno' => $Aluno, 'filmes' => $filmes]);
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

