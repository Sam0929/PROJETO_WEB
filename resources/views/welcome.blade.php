@extends('layouts.main')

@section('title','Home')

@section('content')

<!--Cabeçalho-->
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            <span class="fs-4">Banco de Alunos</span>
      </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="alunos" class="nav-link">Tabela de Alunos</a></li>
            </ul>
    
    </header>
</div>

<!--Conteúdo-->
<div class='container text-center'>
    <div class='row justify-content-center'>
        <div class='col-md-12'>
            <div class='card'>
                <div class='card-header'>{{ __('Dashboard')}} </div>

                    <div class='card-body'>
            

                          <h1>Seja Bem-Vindo!</h1>
                          <!--<a class="btn btn-primary" href="{{url('alunos')}}" role="button">Tabela dos alunos </a>-->     


                    </div>
            </div>
        </div>
    </div>
</div>












@endsection