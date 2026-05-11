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
        View::composer('partials.header', function ($view){


            // BUSCA TODAS AS CATEGORIAS ORDENAR POR NOME
            $categorias = Categoria::orderBy('nome_categoria')->get();

            // var_dump($categorias);
            

            $view->with('categorias', $categorias);


        });
    }
}
