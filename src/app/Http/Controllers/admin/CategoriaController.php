<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;


class CategoriaController extends Controller
{
    public function index(){
        $categorias =Categoria::orderBy("ordem_categoria")
        ->get();
        // dd($categorias);
        return view('admin.categoria.index', compact('categorias'));
    }

    public function alterarStatus($id)
{
    $categoria = Categoria::findOrFail($id);
    $categoria->status_categoria = $categoria->status_categoria === 'ATIVO' ? 'INATIVO' : 'ATIVO';
    $categoria->save();
    return redirect()->back()->with('sucesso', 'Status atualizado!');
}
}
