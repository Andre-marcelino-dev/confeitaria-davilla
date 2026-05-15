<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
        public function pedidos(){
        return view('site.pedidos.pedidos');
    }
}
