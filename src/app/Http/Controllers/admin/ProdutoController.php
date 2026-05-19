<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
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

    // dd($listaProduto);

    return view('admin.produto.index', compact(
        'filtroCategoria',
        'listaProduto',
        'categoriaAtiva'));
    }
    }
