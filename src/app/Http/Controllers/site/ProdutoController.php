<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // 👈 add this line

class ProdutoController extends Controller
{

     public function produto(){
        return view('site.produto.produto');
    }
}
