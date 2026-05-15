<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    
     public function produto(){
        return view('site.produto.produto');
    }
}
