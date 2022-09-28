<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
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
    {   $stores=Store::get();
        return view('store.create',compact('stores'));
    }


    public function store(Request $request)
    {
        Store::create([
            'name'=>$request->name,

        ]);
        return redirect()->back()->with(['success' => " تم  بنجاح"]);
    }

    public function show(Store $store)
    {
        //
    }

    public function edit(Store $id)
    {
        return view('store.Edit',compact('id'));
    }



    public function update(Request $request,  $id)
    {
        Store::where('id',$id)->update([
            'name'=>$request->name,
        ]);
        return redirect()->route('stores.create')->with(['success' => " تم  بنجاح"]);
    }


    public function delete(Store $id)
    {
        $id->delete();
        return redirect()->back()->with(['error' => " تم  بنجاح"]);
    }
}
