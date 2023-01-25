<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class profile extends Controller
{
    public function Show(){
        return view('site.profile');      //Вёрстка профиля
    }
    
    public function publicate($productinf){
        $product = new Product();
        $product->

    }
}
