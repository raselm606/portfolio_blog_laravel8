<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AddtoCart;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddtoCartController extends Controller
{
    public function addCart(Request $request){
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if(Auth::check()){
            $prod_check = Products::where('id', $product_id)->first();
            if($prod_check){
                if(AddtoCart::where('product_id',$product_id)->where('user_id',Auth::id())->first()){
                    return response()->json(['msg'=>$prod_check->name."Already added to cart"]);
                }else{
                    $carItem = new AddtoCart();
                    $carItem->product_id = $product_id;
                    $carItem->user_id = Auth::id();
                    $carItem->product_qty = $product_qty;
                    $carItem->save();
                    return response()->json(['msg'=>$prod_check->name."Added to cart"]);
                }

            }
        }else{
            return response()->json(['msg' => "Login to Continue"]);
        }
    }
    //view cart
    public function viewCart(){
        $cart_count = AddtoCart::get()->count();
        $category = Category::where('status', '0')->get();
        $cartitems = AddtoCart::where('user_id', Auth::id())->get();
        return view('frontend.cart',compact('cartitems','category','cart_count'));
    }
    //delete cart items
    public function deleteCart(Request $request){
        if(Auth::check()) {
            $user_id = $request->input('user_id');
            $product_id = $request->input('product_id');

            if(AddtoCart::where('user_id', Auth::id())->exists()){
                $cartItem = AddtoCart::where('user_id',Auth::id())->first();
                $cartItem->Delete();

                return response()->json(['msg' => "Product Deleted Successfully"]);
            }
        }else{
            return response()->json(['msg' => "Login to continue"]);
        }
    }

    //update cart
    public function updateCart(Request $request){
        $product_id = $request->input('product_id');
        $product_qty = $request->input('qty_input');

        if(Auth::check()){
            if (AddtoCart::where('product_id', $product_id)->where('user_id', Auth::id())->exists()){
                $cart = AddtoCart::where('product_id', $product_id)->where('user_id', Auth::id())->first();
                $cart->product_qty = $product_qty;
                $cart->update();

                return response()->json(['msg' => "Quantity Updated"]);
            }
        }
    }
}
