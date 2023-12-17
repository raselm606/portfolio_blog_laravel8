<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $category  = Category::orderBy('id','desc')->get();
        $order = Order::where('user_id', Auth::id())->get();
        return view('frontend.my-order',compact('category','order'));
    }

    public function viewOrder($id){
        $category  = Category::orderBy('id','desc')->get();
        $order = Order::where('id', $id)->where('user_id', Auth::id())->first();
        return view('frontend.view-order',compact('order','category'));

    }
}
