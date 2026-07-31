@extends('layouts.app')

@section('content')
    <div class="introducao">

        <div class="textoIntroducao">
            <h1>{{ $livro->titulo }}</h1>
            <p>Detalhes do livro</p>
        </div>

    </div>


    <div class="card-detalhes">

        <h3>Informações do Livro</h3>

        <p><strong>Autor:</strong> {{ $livro->autor }}</p>

        <p><strong>Categoria:</strong> {{ $livro->categoria }}</p>

        <p><strong>Ano:</strong> {{ $livro->ano_publicacao }}</p>

        <p><strong>Descrição:</strong> {{ $livro->descricao }}</p>

        <div class="botoes-card-detalhes">
            <a href="{{ route('livros.index') }}">Voltar</a>
            <a href="{{ route('livros.edit', $livro) }}">Editar</a>
            <form action="{{ route('livros.destroy', $livro) }}" method="POST">
                @csrf
                @method('DELETE')

                <button class="botao-deletar" type="submit">
                    Deletar
                </button>
            </form>
        </div>

    </div>
@endsection
