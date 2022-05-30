<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('category.create');
    }
    public function store(Request $request){
        $validated=$request->validate([
            'name'=>'required',
             'status'=>'required',
        ]);
        $category= new Category();
        $category->name= $request->name;
         $category->status= $request->status;
        $category->save();
        return redirect()->route('category.index')->with('msg',"Add Successfully");

    }
    public function index()
    {
       $data=Category::all();
       return view('category.index',compact('data'));
    }
    public function edit($id)
    {
        $data=Category::find($id);
        return view('category.edit',compact('data'));

    }
    Public function delete($id){
    $data=Category::find($id);
    $data->Delete();
    return redirect()->route('orders.index')->with('msg',"Delete Successfully");
    }
}
