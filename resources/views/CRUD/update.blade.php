@extends('layouts.main')

@section('title','Cadastro de novos alunos')

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
        <li class="nav-item"><a href="alunos" class="nav-link">Tabela de Alunos</a></li>
        <li class="nav-item"><a href="about" class="nav-link">Sobre</a></li>
       
      </ul>
    </header>
  </div>
    
<!--Conteúdo-->
<div class='container'>
    <div class='row justify-content-center'>
        <div class='col-md-8'>
            <div class='card'>
                <div class='card-header'>{{ __('Dashboard')}} </div>

                <div class='card-body'>
        
        <form action= "{{ route('alterar_registro',['id' => $Alunos ->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" name="Nome" class="form-control"  placeholder="Nome.." value="{{ $Aluno->Nome }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Matéria</label>
            <input type="text" name="Matéria" class="form-control"  placeholder="Matéria.." value="{{ $Aluno->Matéria }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Professor</label>
            <input type="text" name="Professor" class="form-control"  placeholder="Professor.." value="{{ $Aluno->Professor }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Filme</label>
            <input type="text" name="Filme" class="form-control"  placeholder="Filme.." value="{{ $Aluno->Filme }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <input type="text" name="Descrição" class="form-control"  placeholder="Descrição.." value="{{ $Aluno->Descrição }}">
            
        </div>
            <button type='submit' class='btn btn-primary'>Salvar</button>
    </form>


                </div>
            </div>
        </div>
    </div>
</div>
    

@endsection