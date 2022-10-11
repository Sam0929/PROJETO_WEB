@extends('layouts.main')

@section('title','Cadastro de novos alunos')

@section('content')

    <form action= "{{ route('registrar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" name="Nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome..">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Matéria</label>
            <input type="text" name="Matéria" class="form-control" id="exampleFormControlInput1" placeholder="Matéria..">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Professor</label>
            <input type="text" name="Professor" class="form-control" id="exampleFormControlInput1" placeholder="Professor..">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Filme</label>
            <input type="text" name="Filme" class="form-control" id="exampleFormControlInput1" placeholder="Filme..">
        </div>
        <div class="mb-7">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <input type="text" name="Descrição" class="form-control" id="exampleFormControlInput1" placeholder="Descrição..">
            
        </div>
            <button>Salvar</button>
    </form>
    

@endsection