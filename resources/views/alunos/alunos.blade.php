@extends('layouts.main')

@section('title','Alunos Matriculados')

@section('content')
<!--Cabeçalho-->
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Banco de Alunos</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="alunos" class="nav-link active" aria-current="page">Tabela de Alunos</a></li>
        <li class="nav-item"><a href="about" class="nav-link">Sobre</a></li>
       
      </ul>
    </header>
  </div>
<!--Conteúdo-->
<div class='container'>
    <div class='row justify-content-center'>
        <div class='col-md-8'>
            <div class='card'>
                <div class='card-header'><a class="btn btn-primary" href="{{url('alunos/novo')}}" role="button"> Novo aluno</a> 
                </div>

                <div class='card-body'>
                
            
            <h1>Listas dos alunos</h1>
            
                      <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Matéria</th>
                      <th scope="col">Professor</th>
                      <th scope="col">Filme</th>
                      <th scope="col">Descrição</th>
                      <th scope="col">Editar</th>
                      <th scope="col">Deletar</th>
                    </tr>
                  </thead>
                  <tbody>
            
                @foreach($Alunos as $A)
            
            <table class="table table-bordered">
                 
                    
                    <tr>
                      <th scope="row">{{ $A->id }}</th>
                      <td>{{ $A->Nome }}</td>
                      <td>{{ $A->Matéria }}</td>
                      <td>{{ $A->Professor}}</td>
                      <td>{{ $A->Filme }}</td>
                      <td>{{ $A->Descrição }}</td>
                      <td> <a class="btn btn-primary" href="alunos/{{$A->id}}/edit" role="button">Editar</button></td>
                      <td>
                                <form action="alunos/delete/{{ $A->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Deletar</button>
                                </form>
                      </td>
                    </tr>
                @endforeach
            </tbody>
                </table>
            
            
             
            
            
            
            
                </div>
            </div>
        </div>
    </div>
</div>


@endsection