@extends('layouts.main')

@section('title','Alunos Matriculados')

@section('content')

@foreach($alunos as $aluno)

        <p> {{$aluno->Nome}} -- {{$aluno->Matéria}} -- {{$aluno->Professor}} -- {{$aluno->Filme}} -- {{$aluno->Descrição}}</p>

@endforeach













@endsection