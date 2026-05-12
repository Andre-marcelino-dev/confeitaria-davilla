<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Produto;
use App\Models\Banner;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    // Metodo Home - Carregar a index

    public function home()
    {
      

    // Categorias
    $filtroCategoria = Categoria::where('status_categoria', 'ATIVO')
        ->orderBy('ordem_categoria')
        ->get();

        // dd($filtroCategoria);

          // Todos produtos
    $listaProduto = Produto::with('CategoriaProduto')
        ->where('status_produto', 'ATIVO')
        ->inRandomOrder()
        ->limit(8)
        ->get();


        $listaBanner = Banner::where('status_banner', 'ATIVO')
        ->inRandomOrder()
        ->get();

 

        return view('site.home.home', compact('filtroCategoria','listaProduto', 'listaBanner'));
    }
}
