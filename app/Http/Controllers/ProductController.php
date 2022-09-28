<?php

namespace App\Http\Controllers;

use App\Models\Kind;
use App\Models\Product;
use App\Models\Seller;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {   $products=Product::get();
    $stores=Store::get();
    $kinds=Kind::get();

        return view('product.create',compact('products','stores','kinds'));
    }


    public function store(Request $request)
    {


        Product::create([
            'name'=>$request->name,
            'store_id'=>$request->store_id,
            'kind_id'=>$request->type,
            'code'=>$request->code,
            'photo'=>$request->photo->store('images'),
            'storePlace'=>$request->storePlace,
            'count'=>$request->count,
            'sellerPrice'=>$request->sellerPrice,
            'purchasingPrice'=>$request->purchasingPrice,

        ]);
        return redirect()->back()->with(['success' => " تم  بنجاح"]);
    }

    public function show(Store $store)
    {
        //
    }

    public function edit(Product $product)
    {   $stores =Store ::get();
        $kinds =Kind ::get();
        return view('product.Edit',compact('product','stores','kinds'));
    }



    public function update(Request $request,Product $product)
    {


        $product->update([
            'name'=>$request->name,
            'store_id'=>$request->store_id,
            'kind_id'=>$request->type,
            'code'=>$request->code,
//            'photo'=>$request->photo->store('images'),
            'storePlace'=>$request->storePlace,
            'count'=>$request->count,
            'sellerPrice'=>$request->sellerPrice,
            'purchasingPrice'=>$request->purchasingPrice,
        ]);
        return redirect()->route('product.create')->with(['success' => " تم  بنجاح"]);
    }


    public function delete(Product $product)
    {
        $product->delete();
        return redirect()->back()->with(['error' => " تم  بنجاح"]);
    }
}
