<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('user.create');
    }
    public function store(Request $request)
    {
        $validated= $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            'email'=>'required',
            'contact_number'=>'required',
            'address'=>'required',
            'pin'=>'required',
            'select_country'=>'required',
            'select_state'=>'required',
            'select_city'=>'required',
        ]);
        $product= new User();
        $product->name= $request->name;
        $product->email= $request->email;
        $product->password= $request->password;
        $product->contact_number= $request->contact_number;
        $product->address= $request->address;
        $product->pin= $request->pin;
        $product->select_country= $request->select_country;
        $product->select_state= $request->select_state;
        $product->select_city= $request->select_city;
         $product->save();
         return redirect()->route('users.index')->with('msg',"Add Successfully");
    }
    public function index()
    {
    $data=user::all();
    return view('user.index',compact('data'));
   }
   public function dash(){
    return view('user.dash');
   }
   public function edit($id)
   {
       $data=user::find($id);
       return view('user.edit',compact('data'));
   }
   public function delete($id)
   {
       $data=user::find($id);
       $data->delete();
     return redirect()->route('users.index')->with('msg',"Delete Successfully");
   }
}
