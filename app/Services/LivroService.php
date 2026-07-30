<?php

namespace App\Services;

use App\Models\Livro;
use App\Repositories\LivroRepository;

class LivroService
{
    private LivroRepository $livroRepository;

    public function __construct(LivroRepository $livroRepository)
    {
        $this->livroRepository = $livroRepository;
    }

    public function listar()
    {
        return $this->livroRepository->listar();
    }

    public function criar(array $dados)
    {
        return $this->livroRepository->criar($dados);
    }

    public function editar(array $dados, Livro $livro)
    {
        return $this->livroRepository->editar($dados, $livro);
    }
}
