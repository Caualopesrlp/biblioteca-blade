<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Livro;

class LivroSeeder extends Seeder
{
    public function run(): void
    {
        Livro::create([
            'titulo' => 'O Hobbit',
            'autor' => 'J.R.R Tolkien',
            'categoria' => 'Fantasia',
            'ano_publicacao' => 1937,
            'imagem' => null,
            'descricao' => 'Uma aventura pela Terra Média.'
        ]);

        Livro::create([
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'categoria' => 'Ficção',
            'ano_publicacao' => 1949,
            'imagem' => null,
            'descricao' => 'Uma sociedade controlada pelo Estado.'
        ]);
    }
}
