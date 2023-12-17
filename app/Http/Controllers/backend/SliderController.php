<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index(){
        $sliders = Slider::orderBy('id','desc')->get();
        return view('backend.pages.slider.index',compact('sliders'));
    }
    public function store(Request $request){
        $rules=[
            'date' => 'required',
            'designation' => 'required',
        ];
        $request->validate($rules);

        $slider = new Slider();
        $slider->date = $request->date;
        $slider->designation = $request->designation;
        $slider->inistitute = $request->inistitute;
        $slider->details = $request->details;
        $slider->status = $request->input('status') == TRUE ? '1':'0';
        //upload image
//        if($request->hasFile('image')){
//            $file = $request->file('image');
//            $ext = $file->getClientOriginalExtension();
//            $filename = time().'.'.$ext;
//            $file->move('asset/upload/slider',$filename);
//            $slider->image = $filename;
//        }
        $slider->save();

        $notification = array(
            'msg' =>'Experience Added',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);

    }
    public function update(Request $request, $id){
        $slider = Slider::find($id);

        $rules=[
            'date' => 'required',
            'designation' => 'required',
        ];
        $request->validate($rules);

        $slider->date = $request->date;
        $slider->designation = $request->designation;
        $slider->inistitute = $request->inistitute;
        $slider->details = $request->details;

        $slider->status = $request->input('status') == TRUE ? '1':'0';

        $slider->update();

        $notification = array(
            'msg' =>'Experience Updated',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);

    }
    public function destroy($id){
        $slider = Slider::find($id);
            $slider->delete();
            $notification = array(
                'msg' =>'Experience deleted',
                'alert-type' =>'success',
            );
            return redirect()->back()->with($notification);
    }
}
