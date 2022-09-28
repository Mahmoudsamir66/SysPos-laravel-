<?php

namespace App\Http\Controllers;

use App\Models\Kind;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class reportController extends Controller
{
    function create(){
       $products=Product::get();
       $kinds=Kind::get();
       $stores=Store::get();
        return view('report.product_kind_create',compact('products','kinds','stores'));
    }
    function productkind(Request $request){
       $products=Product::where('store_id',$request->store_id)->where('kind_id',$request->kind_id)->get();

      return view('report.product_kind_report',compact('products'));

    }
}
