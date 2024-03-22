<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/livros', [LivrosController::class, 'obterLivros']);

Route::get('/pesquisar-livros', [LivrosController::class, 'mostrarFormularioPesquisa'])->name('pesquisarLivros');
Route::get('/buscar-livros', [LivrosController::class, 'buscarLivros'])->name('buscarLivros');
