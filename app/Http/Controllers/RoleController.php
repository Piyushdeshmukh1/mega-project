<?php

namespace App\Http\Controllers;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create(){
        return view('roles.create');
    }
    public function store(Request $request){
        $validated=$request->validate([
            'name'=>'required',
            'slug_name'=>'required',

        ]);
       $product= new Role();
       $product->name= $request->name;
       $product->slug_name= $request->slug_name;
       $product->save();
       return redirect()->route('roles.index')->with('msg',"Add Successfully");
    }
    public function index()
     {
        $data=Role::all();
        return view('roles.index',compact('data'));
     }
     public function edit($id)
     {
        $product=Role::find($id);
        return view('roles.edit',compact('product'));
     }
     public function delete($id)
     {
        $data=role::find($id);
        $data->delete();
      return redirect()->route('roles.index')->with('msg',"Delete Successfully");
    }
}
