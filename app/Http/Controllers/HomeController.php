<?php

namespace App\Http\Controllers;

use App\Models\Kind;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $product=Product::get()->count();
        $kinds=Kind::get()->count();
        $stores=Store::get()->count();

        return view('SysPos.index',compact('product','kinds','stores'));
    }
}

