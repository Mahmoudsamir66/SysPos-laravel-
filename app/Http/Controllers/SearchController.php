<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Store;
use App\Models\Kind;
use Illuminate\Http\Request;

class SearchController extends Controller
{
function create(){
    $products=Product::get();
    $kinds=Product::get();
    $stores=Product::get();
    return view('search.create',compact('products','kinds','stores'));
}
    function kindCreate(){
        $products=Product::get();
        $kinds=Product::get();
        $stores=Product::get();
        return view('search.kindcreate',compact('products','kinds','stores'));
    }

function productSearch(Request $request){

    $products=Product::where('name',$request->name)->get();


    return view('search.searchview',compact('products'));
}
    function kindSearch(Request $request){


        $products=Product::where('name',$request->name)->get();

        return view('search.kind',compact('products'));
    }
}
