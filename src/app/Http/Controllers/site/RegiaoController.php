<?php

namespace App\Http\Controllers\site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegiaoController extends Controller
{
     public function regiao(){
        return view('site.regiao.regiao');
    }
}
