<?php

namespace App\Http\Controllers;

use App\Models\buyer;
use App\Models\Kind;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class BuyerController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {   $products=Product::get();
       $stores=Store::get();
       $kinds=Kind::get();
       $buyers=buyer::get();
        return view('buyer.create',compact('products','stores','kinds','buyers'));
    }


    public function store(Request $request)
    {
       buyer::create([

           'name' => $request->name,
           'store_id' => $request->store_id,
           'kind_id' => $request->kind_id,
           'product_id' => $request->product_id,
           'count' => $request->count,
           'money' => $request->money,
       ]);
       return redirect()->back()->with(['success'=>"ok"]);
    }


    public function show(buyer $buyer)
    {
        //
    }


    public function edit(buyer $buyer)
    {
        $products=Product::get();
        $stores=Store::get();
        $kinds=Kind::get();

        return view('buyer.Edit',compact('products','stores','kinds','buyer'))->with(['success'=>"ok"]);
    }


    public function update(Request $request, buyer $buyer)
    {
        $buyer->update([
            'name' => $request->name,
            'store_id' => $request->store_id,
            'kind_id' => $request->kind_id,
            'product_id' => $request->product_id,
            'count' => $request->count,
            'money' => $request->money,

        ]);
        return redirect()->route('buyer.create')->with(['success'=>"ok"]);
    }


    public function delete(buyer $buyer)
    {
        $buyer->delete();
        return redirect()->back()->with(['error' => " تم  بنجاح"]);
    }
}
