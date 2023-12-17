<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogController extends Controller
{
//all
    public function index()
    {
        $blogs = Blogs::orderBy('id','desc')->get();
        return view('backend.pages.blogs.index',compact('blogs'));
    }

//add
    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.pages.blogs.add', compact('categories'));
    }

//store
    public function store(Request $request)
    {
        $rules = [
            'cate_id' => 'required',
            'title' => 'required|unique:blogs|min:10',
            'slug' => 'required|unique:blogs|min:10',
            'image' => 'required',
        ];
        $request->validate($rules);

        $blogs = new Blogs();

        $blogs->cate_id = $request->cate_id;
        //upload image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('public/asset/upload/blogs', $filename);
            $blogs->image = $filename;
        }
        $blogs->title = $request->title;
        if(empty($request->slug)){
            $blogs->slug = str::slug($request->title);
        }else{
            $blogs->slug = str::slug($request->slug);
        }
        $blogs->details = $request->details;


        $blogs->status = $request->input('status')== TRUE ? '1':'0';
        $blogs->homepage = $request->input('homepage')== TRUE ? '1':'0';
        $blogs->save();

        $notification = array(
            'msg' =>'Blog Added',
            'alert-type' =>'success',
        );
        return redirect()->route('admin.all.blogs')->with($notification);
    }

    //edit
    public function edit($id)
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $blogs = Blogs::where('id',$id)->first();
        return view('backend.pages.blogs.edit', compact('categories','blogs'));
    }

//update
    public function update(Request $request, $id)
    {
        $blogs = Blogs::where('id',$id)->first();

        $rules = [
            'cate_id' => 'required',
            'title' => 'required',
        ];
        $request->validate($rules);

        $blogs->cate_id = $request->cate_id;

        if ($request->hasFile('image')) {
            //delete previous image
            $path = 'public/asset/upload/blogs/'.$blogs->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('public/asset/upload/blogs', $filename);
            $blogs->image = $filename;
        }
        $blogs->title = $request->title;
        if(empty($request->slug)){
            $blogs->slug = str::slug($request->title);
        }else{
            $blogs->slug = str::slug($request->slug);
        }
        $blogs->details = $request->details;


        $blogs->status = $request->input('status')== TRUE ? '1':'0';
        $blogs->homepage = $request->input('homepage')== TRUE ? '1':'0';
        $blogs->update();

        $notification = array(
            'msg' =>'Blog Updated',
            'alert-type' =>'success',
        );
        return redirect()->route('admin.all.blogs')->with($notification);
    }

//delete
    public function destroy($id)
    {
        $blogs = Blogs::find($id);
        //delete the image
        if($blogs->image){
            $path = 'public/asset/upload/blogs/'.$blogs->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $blogs->delete();

            $notification = array(
                'msg' =>'Blog Deleted',
                'alert-type' =>'success',
            );
            return redirect()->back()->with($notification);
        }
    }
}
