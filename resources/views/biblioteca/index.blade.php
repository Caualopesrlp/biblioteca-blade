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

    @forelse ($livros as $livro)
        <div class="card-livro">
            <h3>{{ $livro->titulo }}</h3>
            <p>{{ $livro->autor }}</p>
        </div>

    @empty

        <p>Nenhum livro cadastrado.</p>
    @endforelse
    
@endsection
