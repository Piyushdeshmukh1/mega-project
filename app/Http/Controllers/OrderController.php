<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function create(){
        return view('orders.create');
    }
     public function store(Request $request){
         $validated=$request->validate([
             'name'=>'required',
             'add_order'=>'required'
         ]);
        $product= new Order();
        $product->name= $request->name;
        $product->add_order= $request->add_order;
         $product->save();
        return redirect()->route('orders.index')->with('msg',"Add Successfully");
     }
     public function index()
     {
        $data=order::all();
        return view('orders.index',compact('data'));
     }
     public function edit($id){
         $data=order::find($id);
         return view('orders.edit',compact('data'));
     }
     public function delete($id)
     {
         $data=order::find($id);
         $data->delete();
         return redirect()->route('orders.index')->with('msg',"Delete Successfully");
     }
    }



