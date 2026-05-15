<?php


use App\Http\Controllers\site\CardapioController;
use App\Http\Controllers\site\ContatoController;
use App\Http\Controllers\site\HomeController;
use App\Http\Controllers\site\PedidosController;
use App\Http\Controllers\site\RegiaoController;
use App\Http\Controllers\site\SobreController;
use App\Http\Controllers\admin\CategoriaController;
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\admin\DashController;

Route::get('/',[HomeController::class, 'home'])->name('home');
Route::get('/sobre',[SobreController::class, 'sobre'])->name('sobre');
Route::get('/cardapio',[CardapioController::class, 'cardapio'])->name('cardapio.index');

/** Submenu  de Cardapio */

Route::get('/cardapio/categoria/{id}', [CardapioController::class, 'cardapio'])->name('cardapio.categoria');

/**Submenu de produto */

Route::get('/cardapio/produto/{slug}', [CardapioController::class, 'showProduto'])->name('cardapio.produto');

Route::get('/cardapio/categoria/{id}', [CardapioController::class, 'show'])
    ->name('cardapio.categoria');


    
Route::get('/pedidos',[PedidosController::class, 'pedidos'])->name('pedidos');
Route::get('/regiao',[RegiaoController::class, 'regiao'])->name('regiao.index');

/** Submenu  de Regiao */
Route::get('/regiao/area/{id}', [RegiaoController::class, 'show'])->name('regiao.area');
 
Route::get('/contato',[ContatoController::class, 'contato'])->name('contato');



Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashController::class, 'index'])
        ->name('dash');


        //Categorias
        Route::get('/categoria', [CategoriaController::class, 'index'])
            ->name('categoria');
            
});
