<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PedidosController extends Controller
{
        public function pedidos(){
        return view('site.pedidos.pedidos');
    }
}
