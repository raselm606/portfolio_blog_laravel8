<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blogs;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Internship;
use App\Models\Publication;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Social;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    public function Home(){
        $publication = Publication::where('status','0')->orderBy('id','desc')->get();
        $workshop = Workshop::where('status','0')->orderBy('id','desc')->get();
        $internship = Internship::where('status','0')->orderBy('id','desc')->get();
        $education = Education::where('status', '0')->orderBy('id','desc')->get();
        $about_data = About::where('id','1')->first();
        $setting_data = Setting::where('id','1')->first();
        $blogs = Blogs::where('homepage','1')->orderBy('id','desc')->get();
        $experience = Slider::where('status', '0')->orderBy('id', 'desc')->get();
        $social = Social::where('id','1')->first();
        return view('frontend.landing',compact('experience','blogs','social','setting_data','about_data','education','internship','workshop','publication'));
    }

    public function contactStore(Request $request){
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'comments' => 'required',
        ];
        $request->validate($rules);

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->comments = $request->comments;
        $contact->status = $request->input('status')== TRUE ? '1':'0';

        $contact->save();

        $notification = array(
            'msg' =>'We have received your Message',
            'alert-type' =>'success',
        );
        return redirect()->route('home')->with($notification);
    }



}
