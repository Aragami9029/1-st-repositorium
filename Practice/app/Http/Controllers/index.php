<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class index extends Controller
{
    public function Show(){
        return view('site.index');      //Вёрстка главной страницы
    }
}
