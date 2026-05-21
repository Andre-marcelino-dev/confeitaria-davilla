<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use BcMath\Number;

class CategoriaController extends Controller
{
    public function index(){
        $categorias =Categoria::orderBy("ordem_categoria")
        ->get();
        // dd($categorias);
        return view('admin.categoria.index', compact('categorias'));
    }

    public function store(Request $request){
        // dd($request);
        $request->validate([

            'nome_categoria'  =>'required|string|max:30',
            'descricao_categoria' => 'required|string',
            'ordem_categoria' => 'required|integer',
            'status_categoria' => 'required|in:ATIVO,INATIVO',
        ]);


        Categoria::create([
        'nome_categoria' => $request->nome_categoria,
        'descricao_categoria' => $request->descricao_categoria,
        'ordem_categoria' => $request->ordem_categoria,
        'status_categoria' => $request->status_categoria,
        ]);

        return redirect ()
        ->route('admin.categoria')
        ->with('success', 'Categoria cadastrada com sucesso');

    } 

    public function desativar($id){
        $categoria = Categoria::findOrFail($id);
    $categoria->update([
        'status_categoria' => 'INATIVO'
    ]);
        return redirect()
        ->route('admin.categoria')
        ->with('success','Categoria desativada com sucesso');
            
        
    }


        public function ativar($id){
        $categoria = Categoria::findOrFail($id);
    $categoria->update([
        'status_categoria' => 'ATIVO'
    ]);
        return redirect()
        ->route('admin.categoria')
        ->with('success','Categoria ativada com sucesso');
            
        
    }
    }

