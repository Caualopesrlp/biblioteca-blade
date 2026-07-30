@extends('layouts.app')
@section('content')
    <div class="introducao">

        <div class="textoIntroducao">
            <h1>Biblioteca</h1>
            <p>Sistema de Gerenciamento de Acervo</p>
        </div>

        <div class="botaoIntroducao">
            <a href="{{ route('livros.create') }}">Cadastrar Livro</a>
        </div>

    </div>

    <div class="listaLivros">
        @forelse ($livros as $livro)
            <div class="card-livro">
                <h3>{{ $livro->titulo }}</h3>
                <p>{{ $livro->autor }}</p>
                <p>{{ $livro->categoria }}</p>
                <p>{{ $livro->ano_publicacao }}</p>
                <div class="botoesLivro">
                    <a href="{{ route('livros.show', $livro) }}">Ver</a>
                    <a href="{{ route('livros.edit', $livro) }}">Editar</a>
                </div>
            </div>

        @empty

            <p>Nenhum livro cadastrado.</p>
        @endforelse
    </div>
@endsection
