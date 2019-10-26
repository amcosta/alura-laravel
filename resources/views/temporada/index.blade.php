@extends('base-layout')

@section('titulo')
Temporadas
@endsection

@section('cabecalho')
Temporadas
@endsection

@section('conteudo')
    @foreach ($temporadas as $temporada)
        <div class="row">
            <div class='col col-12'>Temporada {{ $temporada->numero }}</div>
        </div>
    @endforeach
@endsection
