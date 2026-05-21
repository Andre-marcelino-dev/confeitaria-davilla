<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller; // 👈 add this line



class ContatoController extends Controller
{
        public function contato(){
        return view('site.contato.contato');
    }
}
