<?php

namespace App\Http\Controllers;

use App\Http\Requests\SellerRequest;
use App\Models\Kind;
use App\Models\Store;
use App\Models\Product;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function create()
    {
        $products = Product::get();
        $stores = Store::get();
        $kinds = Kind::get();
        $users = User::get();
        $sellers = Seller::get();
       // dd(session()->get('name'));
        return view('seller.create', compact('products', 'stores', 'kinds', 'users', 'sellers'));
    }


    public function store(SellerRequest $request)
    {

//        $x = $request->name;
//        session()->put('name', $x);
        Seller::create([
            'name' => $request->name,
            'store_id' => $request->store_id,
            'kind_id' => $request->kind_id,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'count' => $request->count,
            'money' => $request->money,


        ]);
        return redirect()->back()->with(['success' => " تم  بنجاح"]);
    }

    public function show(Seller $store)
    {
        //
    }

    public function edit(Seller $id)
    {
        $stores = Store::get();
        $kinds = Kind::get();
        $products = Product::get();
        $users = Kind::get();
        return view('seller.Edit', compact('id', 'stores', 'kinds', 'products', 'users'));
    }


    public function update(Request $request, $id)
    {
        Seller::where('id', $id)->update([
            'name' => $request->name,
            'store_id' => $request->store_id,
            'kind_id' => $request->kind_id,
            'product_id' => $request->product_id,
            'user_id' => $request->user_id,
            'count' => $request->count,
            'money' => $request->money,
        ]);
        return redirect()->route('seller.create')->with(['success' => " تم  بنجاح"]);
    }


    public function delete(Seller $id)
    {
        $id->delete();
        return redirect()->back()->with(['error' => " تم  بنجاح"]);
    }
}
