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

    <ul class="list-group">
        @foreach ($series as $serie)
            <li class='list-group-item'>{{ $serie->nome }}</li>
            <form action="{{ route('serie.destroy', ['id' => $serie->id]) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Removar</button>
            </form>
        @endforeach
    </ul>
@endsection
