<?php

namespace App\Http\Controllers\site;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class CardapioController extends Controller
{
    // LISTA TODOS OS PRODUTOS
public function cardapio()
{
    $filtroCategoria = Categoria::where('status_categoria', 'ATIVO')
        ->orderBy('ordem_categoria')
        ->get();

    $listaProduto = Produto::with('CategoriaProduto')
        ->where('status_produto', 'ATIVO')
        ->orderBy('ordem_produto')
        ->get();

    // ADICIONE ESTA LINHA
    $categoriaAtiva = 'all';

    return view('site.cardapio.cardapio', compact(
        'filtroCategoria',
        'listaProduto',
        'categoriaAtiva'
    ));
}


public function show($id)
{
    // Categorias
    $filtroCategoria = Categoria::where('status_categoria', 'ATIVO')
        ->orderBy('ordem_categoria')
        ->get();

    // Produtos filtrados pela categoria
    $listaProduto = Produto::with('CategoriaProduto')
        ->where('status_produto', 'ATIVO')        
        ->orderBy('ordem_produto')
        ->get();

    // Categoria ativa
    $categoriaAtiva = '.categoria-' . $id;
    //dd($listaProduto);

    return view('site.cardapio.cardapio', compact(
        'filtroCategoria',
        'listaProduto',
        'categoriaAtiva'
    ));
}

  public function showProduto($slug)
{
    // Categorias
    $filtroCategoria = Categoria::where('status_categoria', 'ATIVO')
        ->orderBy('ordem_categoria')
        ->get();

    // Produto atual
    $produto = Produto::with('CategoriaProduto')
        ->where('status_produto', 'ATIVO')
        ->where('slug_produto', $slug)
        ->firstOrFail();

    // Produtos relacionados
    $produtosRelacionados = Produto::with('CategoriaProduto')
        ->where('status_produto', 'ATIVO')
        ->where('id_categoria', $produto->id_categoria)
        ->where('id_produto', '!=', $produto->id_produto)

        ->limit(3)
        ->orderBy('ordem_produto')
        ->get();

    // Todos produtos
    $listaProduto = Produto::with('CategoriaProduto')
        ->where('status_produto', 'ATIVO')
        ->orderBy('ordem_produto')
        ->get();

    $categoriaAtiva = $produto->id_categoria;

    return view('site.produto.produto', compact(
        'produto',
        'listaProduto',
        'produtosRelacionados',
        'filtroCategoria',
        'categoriaAtiva'
    ));
}



}

