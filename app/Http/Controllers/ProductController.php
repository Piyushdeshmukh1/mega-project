<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function create(){
        return view('products.create');
    }
     public function store(Request $request){
         $validated=$request->validate([
             'name'=>'required',
             'description'=>'required',
             'Price'=>'required',
             'Discount'=>'required',
             'Secret_code'=>'required',
             'Status'=>'required',
         ]);
        $product= new Product();
        $product->name= $request->name;
        $product->description= $request->description;
        $product->Price= $request->Price;
        $product->Discount= $request->Discount;
        $product->Secret_code= $request->Secret_code;
        $product->Status= $request->Status;
        $product->save();
        return redirect()->route('products.index')->with('msg',"Add Successfully");
     }
     public function index()
     {
        $data=Product::all();
        return view('products.index',compact('data'));
     }
     public function edit($id)
     {
        $data=product::find($id);
        return view('products.edit',compact('data'));
     }
     public function delete($id)
     {
        $data=product::find($id);
        $data->delete();
      return redirect()->route('products.index')->with('msg',"Delete Successfully");
    }
}
