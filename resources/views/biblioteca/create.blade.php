@extends('layouts.app')
@section('content')
    <form action="{{ route('livros.store') }}" method="POST">
        @csrf

        <div class="introducao">

            <div class="textoIntroducao">
                <h1>Cadastrar Livro</h1>
                <p>Adicione um novo livro ao acervo.</p>
            </div>

        </div>

        <div class="formulario-cadastro-livro">

            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" value="{{ old('titulo') }}">

            @error('titulo')
                <span class="erro">{{ $message }}</span>
            @enderror


            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" value="{{ old('autor') }}">

            @error('autor')
                <span class="erro">{{ $message }}</span>
            @enderror


            <label for="categoria">Categoria:</label>
            <select name="categoria" id="categoria">

                <option value="">Selecione...</option>

                <option value="Fantasia" {{ old('categoria') == 'Fantasia' ? 'selected' : '' }}>
                    Fantasia
                </option>

                <option value="Romance" {{ old('categoria') == 'Romance' ? 'selected' : '' }}>
                    Romance
                </option>

                <option value="Tecnologia" {{ old('categoria') == 'Tecnologia' ? 'selected' : '' }}>
                    Tecnologia
                </option>

                <option value="Mistério" {{ old('categoria') == 'Mistério' ? 'selected' : '' }}>
                    Mistério
                </option>

                <option value="Ficção Científica" {{ old('categoria') == 'Ficção Científica' ? 'selected' : '' }}>
                    Ficção Científica
                </option>

            </select>

            @error('categoria')
                <span class="erro">{{ $message }}</span>
            @enderror


            <label for="ano_publicacao">Ano de Publicação:</label>
            <input type="number" id="ano_publicacao" name="ano_publicacao" value="{{ old('ano_publicacao') }}">

            @error('ano_publicacao')
                <span class="erro">{{ $message }}</span>
            @enderror


            <label for="descricao">Descrição:</label>

            <textarea name="descricao" id="descricao" cols="30" rows="10">{{ old('descricao') }}</textarea>

            @error('descricao')
                <span class="erro">{{ $message }}</span>
            @enderror


            <div class="botao-create">
                <button type="submit">Cadastrar Livro</button>
            </div>

        </div>

    </form>
@endsection
