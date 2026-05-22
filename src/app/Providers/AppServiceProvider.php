<?php

namespace App\Providers;

use App\Models\Categoria;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
// use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $categorias = Categoria::orderBy('nome_categoria')->get();
            $view->with('lista', $categorias);
            $view->with('categorias', $categorias);
            $view->with('filtroCategoria', $categorias);
        });
    }
}
