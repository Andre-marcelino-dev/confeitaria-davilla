<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Http\Controllers\Controller; // 👈 add this line
=======
use App\Http\Controllers\Controller;
>>>>>>> 9042e378aee4b09b9829929620acc50f856b9dd4

class ProdutoController extends Controller
{

     public function produto(){
        return view('site.produto.produto');
    }
}
