<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AddtoCart;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function checkOut()
    {
        $category = Category::where('status', '0')->get();
//        $solditems = AddtoCart::where('user_id', Auth::id())->get();
//        foreach ($solditems as $item){
//            if (Products::where('id', $item->product_id)->where('quantity','>=',$item->product_qty)->exists()){
//                $removeItem = AddtoCart::where('user_id', Auth::id())->where('product_id',$item->product_id)->first();
//                $removeItem->delete();
//            }
//        }
        $cartItems = AddtoCart::where('user_id', Auth::id())->get();

        return view('frontend.checkout',compact('cartItems','category'));
    }

    public function checkoutConfirm(Request $request){
        $rules=[
            'fullname' => 'required',
            'mobile' => 'required',
        ];
        $request->validate($rules);

        //inserting data into Order table
        $order = new Order();
        $order->user_id = Auth::id();
        $order->fullname = $request->input('fullname');
        $order->mobile = $request->input('mobile');
        $order->address = $request->input('address');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->country = $request->input('country');
        $order->zipcode = $request->input('zipcode');
        $order->traking_no = 'RAS'.rand(11111,99999).'SHOP';

        $total = 0;
        $cartItems_total = AddtoCart::where('user_id', Auth::id())->get();
        foreach($cartItems_total as $prod){
            $total += $prod->products->selling_price;
        }
        $order->total_price= $total;

        $order->save();



        //inserting data into OrderItems table
        $cartItems = AddtoCart::where('user_id', Auth::id())->get();
        foreach ($cartItems as $item){
            OrderItems::create([
                'order_id' => $order->id,
                'prod_id' => $item->product_id,
                'qty' => $item->product_qty,
                'price' => $item->products->selling_price,
            ]);

            //substract the quantity from Product table
            $prod = Products::where('id', $item->product_id)->first();
            $prod->quantity = $prod->quantity - $item->product_qty;
            $prod->update();

        }
        // if address field is empty then rest of the filled will be updated
        if(Auth::user()){
            $user = User::where('id', Auth::id())->first();
            $user->name = $request->input('fullname');
            $user->mobile = $request->input('mobile');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->country = $request->input('country');
            $user->zipcode = $request->input('zipcode');
            $user->update();
        }

        //after place order all cart item will be destroyed
        $cartItems = AddtoCart::where('user_id', Auth::id())->get();
        AddtoCart::destroy($cartItems);

        $notification = array(
            'msg' =>'Order Placed Successfully!',
            'alert-type' =>'success',
        );
        return redirect()->route('my.order')->with($notification);


    }
}
