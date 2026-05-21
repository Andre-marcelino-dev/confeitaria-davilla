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

Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/sobre',[SobreController::class, 'sobre'])->name('sobre');
Route::get('/cardapio',[CardapioController::class, 'cardapio'])->name('cardapio.index');
Route::get('/cardapio/categoria/{id}', [CardapioController::class, 'show'])->name('cardapio.categoria');
Route::get('/cardapio/produto/{slug}', [CardapioController::class, 'showProduto'])->name('cardapio.produto');
Route::get('/pedidos',[PedidosController::class, 'pedidos'])->name('pedidos');
Route::get('/regiao',[RegiaoController::class, 'regiao'])->name('regiao.index');
Route::get('/regiao/area/{id}', [RegiaoController::class, 'show'])->name('regiao.area');
Route::get('/contato',[ContatoController::class, 'contato'])->name('contato');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashController::class, 'index'])->name('dash');
    Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria');
    Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
    Route::patch('/categoria/{id}/status', [CategoriaController::class, 'alterarStatus'])->name('categoria.status');
    Route::get('/produto', [ProdutoController::class, 'index'])->name('produto');

    Route::get('/', [DashController::class, 'index'])
        ->name('dash');


        //Categorias
        Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria');
        Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
        Route::patch('/categoria/{id}/desativar', [CategoriaController::class, 'desativar'])->name('categoria.desativar');
        Route::patch('/categoria/{id}/ativar', [CategoriaController::class, 'ativar'])->name('categoria.ativar');









            

        //Categorias
        Route::get('/produto', [ProdutoController::class, 'index'])
            ->name('produto');
            
});
