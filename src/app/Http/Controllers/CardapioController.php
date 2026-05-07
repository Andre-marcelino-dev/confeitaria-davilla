<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Produto;

use Illuminate\Http\Request;

class CardapioController extends Controller
{
         public function cardapio(){
            //Buscar Categoria para montar a lista de filtro
            $filtroCategoria = Categoria::where('status_categoria', 'ATIVO')->orderBy('ordem_categoria')
            ->get();


            //Busca todos os Produtos ativos Com a categoria
            $listaProduto = Produto::with('CategoriaProduto')
            ->where('status_produto', 'ATIVO')
            ->orderBy('ordem_produto')
            ->get();

            // var_dump($listaProduto);

           
            

        return view('site.cardapio.cardapio', compact('filtroCategoria', 'listaProduto'));
    }

    public function showProduto($slug){

        $produto = Produto::with('CategoriaProduto')
        ->where('status_produto', 'ATIVO')
        ->where('slug_produto', $slug)
        ->firstOrFail();



        $produtosRelacionados = Produto::with('CategoriaProduto')
        ->where('status_produto', 'ATIVO')
        ->where('id_categoria', $produto->id_categoria)
         ->orderBy('ordem_produto')
        ->get();


            //Busca todos os Produtos ativos Com a categoria
        $listaProduto = Produto::with('CategoriaProduto')
        ->where('status_produto', 'ATIVO')
        ->orderBy('ordem_produto')
        ->get();


      
    

         //dd($produtosRelacionados);

        return view('site.produto.produto', compact('produto','listaProduto','produtosRelacionados'));
    }


    public function filtroCategoria($slug)
{
    // Categorias para as tags
    $filtroCategoria = Categoria::where('status_categoria', 'ATIVO')
        ->orderBy('ordem_categoria')
        ->get();

    // Busca categoria pelo slug
    $categoria = Categoria::where('slug_produto', $slug)
        ->firstOrFail();

    // Produtos da categoria
    $listaProduto = Produto::with('CategoriaProduto')
        ->where('status_produto', 'ATIVO')
        ->where('id_categoria', $categoria->id)
        ->orderBy('ordem_produto')
        ->get();

    return view('site.cardapio.cardapio', compact('filtroCategoria', 'listaProduto'));
}

    

        
    }

