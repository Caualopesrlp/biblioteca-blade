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
            <input type="text" id="titulo" name="titulo" required>

            <label for="autor">Autor:</label>
            <input type="text" id="autor" name="autor" required>

            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" required>
                <option value="">Selecione...</option>
                <option value="Fantasia">Fantasia</option>
                <option value="Romance">Romance</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Mistério">Mistério</option>
                <option value="Ficção Científica">Ficção Científica</option>
            </select>

            <label for="ano_publicacao">Ano de Publicação:</label>
            <input type="number" id="ano_publicacao" name="ano_publicacao" required>

            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>

            <div class="botao-create">
                <button type="submit">Cadastrar Livro</button>
            </div>

        </div>

    </form>
@endsection
