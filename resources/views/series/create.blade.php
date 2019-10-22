@extends('base-layout')

@section('titulo')
Adicionar Série
@endsection

@section('cabecalho')
Adicionar Série
@endsection

@section('conteudo')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post">
        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" />
        </div>

        <button class="btn btn-primary">Salvar</button>
    </form>
@endsection
