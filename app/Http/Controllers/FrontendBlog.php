<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Http\Request;

class FrontendBlog extends Controller
{
    public function index(){
        $setting_data = Setting::where('id','1')->first();
        $all_blogs = Blogs::orderBy('id','desc')->where('status','0')->paginate(9);
        $social = Social::where('id','1')->first();
        return view('frontend.blogs',compact('all_blogs','social','setting_data'));
    }
    public function blogdetails($slug){
        $setting_data = Setting::where('id','1')->first();
        $blogs = Blogs::where('slug',$slug)->first();
        $all_blog = Blogs::orderBy('id','desc')->where('status','0')->limit('6')->get();
        $all_blog_image = Blogs::orderBy('id','desc')->where('status','0')->limit('9')->get();
        $category = Category::orderBy('id','desc')->where('status','0')->get();
        $social = Social::where('id','1')->first();
        return view('frontend.blog-details',compact('blogs','all_blog','category','all_blog_image','social','setting_data'));
    }
}
