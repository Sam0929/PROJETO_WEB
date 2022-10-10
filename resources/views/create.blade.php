@extends('layouts.main')

@section('title','Cadastro de novos alunos')

@section('content')

    <form action= "{{ route('registrar') }}" method="POST">
        @csrf
        <label for="">Nome</label> <br />
        <input type="text" name="nome"> <br />
        <label for="">Matéria</label> <br />
        <input type="text" name="matéria"> <br />
        <label for="">Professor</label> <br />
        <input type="text" name="professor"> <br />
        <label for="">Filmes</label> <br />
        <input type="text" name="filmes"> <br />
        <label for="">Descrição</label> <br />
        <input type="text" name="descrição"> <br />
            <button>Salvar</button>
    </form>

@endsection