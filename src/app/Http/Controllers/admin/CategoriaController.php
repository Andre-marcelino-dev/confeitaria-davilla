<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::orderBy("ordem_categoria")->get();
        return view('admin.categoria.index', compact('categorias'));
    }

    public function store(Request $request){
        $request->validate([
            'nome_categoria' => 'required|string|max:255',
        ]);

        Categoria::create($request->all());
        return redirect()->back()->with('sucesso', 'Categoria criada com sucesso!');
    }

    public function alterarStatus($id){
        $categoria = Categoria::findOrFail($id);
        $categoria->status_categoria = $categoria->status_categoria === 'ATIVO' ? 'INATIVO' : 'ATIVO';
        $categoria->save();
        return redirect()->back()->with('sucesso', 'Status atualizado!');
    }
}
