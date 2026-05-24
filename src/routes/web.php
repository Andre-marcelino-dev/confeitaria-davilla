<?php

use App\Http\Controllers\site\CardapioController;
use App\Http\Controllers\site\ContatoController;
use App\Http\Controllers\site\HomeController;
use App\Http\Controllers\site\PedidosController;
use App\Http\Controllers\site\RegiaoController;
use App\Http\Controllers\site\SobreController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\DashController;
use App\Http\Controllers\admin\CategoriaController;
use App\Http\Controllers\admin\ProdutoController;

// Rotas do site
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/sobre', [SobreController::class, 'sobre'])->name('sobre');
Route::get('/cardapio', [CardapioController::class, 'cardapio'])->name('cardapio.index');
Route::get('/cardapio/categoria/{id}', [CardapioController::class, 'show'])->name('cardapio.categoria');
Route::get('/cardapio/produto/{slug}', [CardapioController::class, 'showProduto'])->name('cardapio.produto');
Route::get('/pedidos', [PedidosController::class, 'pedidos'])->name('pedidos');
Route::get('/regiao', [RegiaoController::class, 'regiao'])->name('regiao.index');
Route::get('/regiao/area/{id}', [RegiaoController::class, 'show'])->name('regiao.area');
Route::get('/contato', [ContatoController::class, 'contato'])->name('contato');

// Rotas do admin
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashController::class, 'index'])->name('dash');

    // Categorias
    Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria');
    Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
    Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
    Route::patch('/categoria/{id}/status', [CategoriaController::class, 'alterarStatus'])->name('categoria.status');

    // Produtos
    Route::get('/produto', [ProdutoController::class, 'index'])->name('produto');
    Route::put('/produto/{id}', [ProdutoController::class, 'update'])->name('produto.update');
     Route::patch('/produto/{id}/status', [ProdutoController::class, 'alterarStatus'])->name('produto.status');
    Route::post('/produto', [ProdutoController::class, 'store'])->name('produto.store');

    //Deleta um produto especifico

    Route::delete('/admin/produto/{id}', [ProdutoController::class, 'destroy'])
    ->name('produto.destroy');
    
});