<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;

class RegiaoController extends Controller
{
     public function regiao(){
        return view('site.regiao.regiao');
    }
}
