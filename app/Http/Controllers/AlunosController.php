<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use Redirect;
use Illuminate\Support\Facades\Http;
use Nette\Utils\Json;
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
        
        $movies = array();
            
            for($j=1; $j<7; $j++){

            $api = Http::get('https://www.learn-laravel.cf/movies?page=' . $j);
            $auxjson = json_decode($api, true);
            $api = $auxjson['data'];

            foreach ($api as $movie){
                for($i=0 ; $i<6; $i++) {
                    if($movie['category_id'] == $i+1){
                        
                        $movies[] = array('nome' => $movie['name']);
                }
            }
        };
    }
        return view ('CRUD.create',['movies' => $movies]);
}

    public function add (Request $request){

        $Aluno = new Aluno;
        $Aluno = $Aluno-> create($request -> all());
        
        return redirect::to('alunos');
    }
    
    public function edit ($id) {
        $Aluno = Aluno::findOrFail($id);
        $movies = array();

        for($j=1; $j<7; $j++) {

            $api = Http::get('https://www.learn-laravel.cf/movies?page=' . $j);
            $auxjson = json_decode($api, true);
            $api = $auxjson['data'];

            foreach ($api as $movie){
                for($i=0 ; $i<6; $i++){
                    if($movie['category_id'] == $i+1){
                        
                        $movies[] = array('nome' => $movie['name']);
                }
            }
        };
    }
        
        return view('CRUD.create', ['Aluno' => $Aluno, 'movies' => $movies]);
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