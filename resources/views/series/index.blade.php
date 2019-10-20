@extends('base-layout')

@section('titulo')
Séries
@endsection

@section('cabecalho')
Séries
@endsection

@section('conteudo')
    <a href="/series/adicionar" class="btn btn-primary mb-3">Adicionar</a>

    <ul class="list-group">
        @foreach ($series as $serie)
            "<li class='list-group-item'><?= $serie; ?></li>"
        @endforeach
    </ul>
@endsection
