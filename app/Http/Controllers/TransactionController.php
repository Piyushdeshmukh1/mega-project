<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create(){
        return view('transactions.create');
    }
    public function store(Request $request){
        $validated=$request->validate([
            'name'=>'required',
            'add_transaction'=>'required',

        ]);
       $product= new Transaction();
       $product->name= $request->name;
       $product->add_transaction= $request->add_transaction;
       $product->save();
       return redirect()->route('transactions.index')->with('msg',"Add Successfully");
    }
    public function index()
     {
        $data=Transaction::all();
        return view('transactions.index',compact('data'));
     }
     public function edit($id)
     {
        $product=transaction::find($id);
        return view('transactions.edit',compact('product'));
     }
     public function delete($id)
     {
        $data=Transaction::find($id);
        $data->delete();
      return redirect()->route('transactions.index')->with('msg',"Delete Successfully");
    }
}
