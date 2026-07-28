<?php

use App\Http\Controllers\LivroControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('livros', LivroControler::class);
