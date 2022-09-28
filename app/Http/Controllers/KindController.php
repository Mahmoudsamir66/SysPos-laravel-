<?php

namespace App\Http\Controllers;

use App\Models\Kind;
use Illuminate\Http\Request;

class KindController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {   $kinds=Kind::get();
        return view('kind.create',compact('kinds'));
    }


    public function store(Request $request)
    {
        Kind::create([
            'type'=>$request->type,

        ]);
        return redirect()->back()->with(['success' => " تم  بنجاح"]);
    }


    public function show(Kind $kind)
    {
        //
    }


    public function edit(Kind $id)
    {
       return view('kind.Edit',compact('id'));
    }


    public function update(Request $request,  $id)
    {
        Kind::where('id',$id)->update([
            'type'=>$request->type,
        ]);
        return redirect()->route('kind.create')->with(['success' => " تم  بنجاح"]);
    }


    public function delete(Kind $id)
    {
        $id->delete();
        return redirect()->back()->with(['success' => " تم  بنجاح"]);
    }
}
