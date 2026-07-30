<?php

namespace App\Repositories;

use App\Models\Livro;

class LivroRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function listar()
    {
        return Livro::all();
    }

    public function criar(array $dados)
    {
        return Livro::create($dados);
    }
}
