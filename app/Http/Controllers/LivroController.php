<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Http\Requests\StoreLivroRequest;
use App\Http\Requests\UpdateLivroRequest;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = [
            (object) [
                'titulo' => 'O Hobbit',
                'autor' => 'J.R.R Tolkien'
            ],
            (object) [
                'titulo' => '1984',
                'autor' => 'George Orwell'
            ]
        ];

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        return view('biblioteca.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        return view('biblioteca.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLivroRequest $request, Livro $livro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        //
    }
}
