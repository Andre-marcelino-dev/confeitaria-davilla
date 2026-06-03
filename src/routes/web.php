<?php

    use App\Http\Controllers\site\CardapioController;
    use App\Http\Controllers\site\ContatoController;
    use App\Http\Controllers\site\HomeController;
    use App\Http\Controllers\site\PedidosController;
    use App\Http\Controllers\site\RegiaoController;
    use App\Http\Controllers\site\SobreController;
    use Illuminate\Support\Facades\Route;


    use App\Http\Controllers\admin\PerfilController;
    use App\Http\Controllers\admin\DashController;
    use App\Http\Controllers\admin\CategoriaController;
    use App\Http\Controllers\admin\ProdutoController;
    use App\Http\Controllers\admin\ClienteController;
    use App\Http\Controllers\admin\AuthController;


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

    // Autenticação
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'autenticar'])->name('login.autenticar');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Rotas protegidas
    Route::middleware('auth:admin')->group(function () {

        // Dashboard
        Route::get('/', [DashController::class, 'index'])->name('dash');

        // Perfil
        Route::get('/perfil', [PerfilController::class, 'index'])
            ->name('perfil');

        Route::put('/perfil', [PerfilController::class, 'update'])
            ->name('perfil.update');

        // Categorias
        Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria');
        Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
        Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
        Route::patch('/categoria/{id}/status', [CategoriaController::class, 'alterarStatus'])->name('categoria.status');

        // Produtos
        Route::get('/produto', [ProdutoController::class, 'index'])->name('produto');
        Route::post('/produto', [ProdutoController::class, 'store'])->name('produto.store');
        Route::put('/produto/{id}', [ProdutoController::class, 'update'])->name('produto.update');
        Route::patch('/produto/{id}/status', [ProdutoController::class, 'alterarStatus'])->name('produto.status');
        Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.destroy');

        // Clientes
        Route::get('/cliente', [ClienteController::class, 'index'])->name('cliente');
        Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
        Route::put('/cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');
        Route::patch('/cliente/{id}/status', [ClienteController::class, 'status'])->name('cliente.status');
        Route::delete('/cliente/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');

    });

});