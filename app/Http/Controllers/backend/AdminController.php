<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $all_blogs = Blogs::all()->count();
        $category_count = Category::all()->count();
        $message_count = Contact::all()->count();
        return view('backend.pages.dashboard',compact('all_blogs','category_count','message_count'));
    }
}
