<?php

namespace App\Http\Controllers;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Role;
use App\Models\Order;



class DashboardController extends Controller
{
    public function dashboard(){
        $user = User::count();
        $product = Product::count();
        $role = Role::count();
        $order = Order::count();
        $users = User::all();
        $products = Product::all();
        $roles = Role::all();
        
      return view('dashboard',compact('user','product','role','order','users','products','roles'));
    }
  }
