<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Http\Requests\StoreLivroRequest;
use App\Http\Requests\UpdateLivroRequest;
use App\Services\LivroService;
use Illuminate\Support\Facades\Redirect;

class LivroController extends Controller
{
    private LivroService $livroService;

    public function __construct(LivroService $livroService)
    {
        $this->livroService = $livroService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = $this->livroService->listar();

        return view('biblioteca.index', compact('livros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biblioteca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLivroRequest $request)
    {
        $dados = $request->validated();

        $this->livroService->criar($dados);

        return redirect(route('livros.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        return view('biblioteca.show', compact('livro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        return view('biblioteca.edit', compact('livro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLivroRequest $request, Livro $livro)
    {
        $dados = $request->validated();

        $this->livroService->editar($dados, $livro);

        return redirect(route('livros.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        $this->livroService->deletar($livro);

        return redirect(route('livros.index'));
    }
}
