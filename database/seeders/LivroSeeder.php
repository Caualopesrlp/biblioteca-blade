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
            'autor' => 'J.R.R. Tolkien',
            'categoria' => 'Fantasia',
            'ano_publicacao' => 1937,
            'descricao' => 'A aventura de Bilbo Bolseiro pela Terra Média.'
        ]);

        Livro::create([
            'titulo' => 'Dom Casmurro',
            'autor' => 'Machado de Assis',
            'categoria' => 'Romance',
            'ano_publicacao' => 1899,
            'descricao' => 'Romance clássico da literatura brasileira.'
        ]);

        Livro::create([
            'titulo' => '1984',
            'autor' => 'George Orwell',
            'categoria' => 'Ficção Científica',
            'ano_publicacao' => 1949,
            'descricao' => 'Uma sociedade controlada por vigilância e manipulação.'
        ]);

        Livro::create([
            'titulo' => 'Clean Code',
            'autor' => 'Robert C. Martin',
            'categoria' => 'Tecnologia',
            'ano_publicacao' => 2008,
            'descricao' => 'Práticas para escrever código limpo e sustentável.'
        ]);

        Livro::create([
            'titulo' => 'Harry Potter e a Pedra Filosofal',
            'autor' => 'J.K. Rowling',
            'categoria' => 'Fantasia',
            'ano_publicacao' => 1997,
            'descricao' => 'O início da jornada de Harry Potter no mundo mágico.'
        ]);

        Livro::create([
            'titulo' => 'O Código Da Vinci',
            'autor' => 'Dan Brown',
            'categoria' => 'Mistério',
            'ano_publicacao' => 2003,
            'descricao' => 'Um professor de simbologia investiga um segredo oculto envolvendo a história e a arte.'
        ]);
    }
}
