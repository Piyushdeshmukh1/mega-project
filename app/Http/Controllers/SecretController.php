<?php

namespace App\Http\Controllers;
use App\Models\secret;
use Illuminate\Http\Request;

class SecretController extends Controller
{

    public function create(){
        return view('secrets.create');
    }
     public function store(Request $request){
         $validated=$request->validate([
             'name'=>'required',
             'add_slug'=>'required'
         ]);
        $secret= new Secret();
        $secret->name= $request->name;
        $secret->add_slug= $request->add_slug;
         $secret->save();
        return redirect()->route('secrets.index')->with('msg',"Add Successfully");
     }
     public function index()
     {
        $data=secret::all();
        return view('secrets.index',compact('data'));
     }
     public function edit($id){
         $data=secret::find($id);
         return view('secrets.edit',compact('data'));
     }
     public function delete($id)
     {
         $data=secret::find($id);
         $data->delete();
         return redirect()->route('secrets.index')->with('msg',"Delete Successfully");
     }
    }



