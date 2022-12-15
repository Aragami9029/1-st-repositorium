<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
    public function Show(){
        return view('site.profile');      //Вёрстка профиля
    }
    
}
