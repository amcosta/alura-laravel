@extends('base-layout')

@section('titulo')
Séries
@endsection

@section('cabecalho')
Séries
@endsection

@section('conteudo')
    @if (!empty($mensagem)):
        <div class="alert alert-info">{{ $mensagem }}</div>
    @endif

    <a href="{{ route('serie.create') }}" class="btn btn-primary mb-3">Adicionar</a>

    @foreach ($series as $serie)
        <div class="row">
            <div class='col col-10'>{{ $serie->nome }}</div>
            <div class="col col-1">
                <a href="{{ route('temporada.index', ['serieId' => $serie->id]) }}">Temp</a>
            </div>
            <div class="col col-1">
                <form action="{{ route('serie.destroy', ['id' => $serie->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger">Remover</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
