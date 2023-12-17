<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function index(){
        $setting_data = Setting::where('id','1')->first();
        return view('backend.pages.settings',compact('setting_data'));
    }
    public function updateSetting(Request $request){
        $setting = Setting::where('id', '1')->first();
        $rules=[
//            'site_logo' => 'required',
        ];
        $request->validate($rules);

        $setting->admin_title = $request->admin_title;
        $setting->site_title = $request->site_title;

        //upload site_logo
        //upload image
        if ($request->hasFile('site_logo')) {
            $file = $request->file('site_logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time() .'site_logo' .'.' . $ext;
            $file->move('public/asset/upload/settings', $filename);
            $setting->site_logo = $filename;
        }

        //upload mobile_logo
        if ($request->hasFile('mobile_logo')) {
            $file = $request->file('mobile_logo');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'mobile_logo' . '.' . $ext;
            $file->move('public/asset/upload/settings', $filename);
            $setting->mobile_logo = $filename;
        }

        //upload favicon
        if ($request->hasFile('favicon')) {
            $file = $request->file('favicon');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'favicon'. '.' . $ext;
            $file->move('public/asset/upload/settings', $filename);
            $setting->favicon = $filename;
        }

        //upload hero_img
        if ($request->hasFile('hero_img')) {
            $file = $request->file('hero_img');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'hero_img' . '.' . $ext;
            $file->move('public/asset/upload/settings', $filename);
            $setting->hero_img = $filename;
        }


        $setting->hero_text = $request->hero_text;
        $setting->hero_subtext = $request->hero_subtext;
        $setting->mobile = $request->mobile;
        $setting->email = $request->email;
        $setting->copyright = $request->copyright;
        $setting->location = $request->location;

        $setting->update();

        $notification = array(
            'msg' =>'Setting Updated',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);
    }
    public function profile(){
        $user = Auth::user();
        return view('backend.pages.profile',compact('user'));
    }
    public function updateProfile(Request $request){
        $users = Auth::user();

        $rules=[
            'email'=> 'required',

        ];
        $request->validate($rules);

        if(!empty($users)){

            $users->name = $request->name;
            $users->email = $request->email;


            $users->update();

            $notification = array(
                'msg' =>'Profile Updated',
                'alert-type' =>'success',
            );
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'msg' =>'Profile not Updated',
                'alert-type' =>'danger',
            );
            return redirect()->back()->with($notification);
        }
    }
    public function updatePassword(Request $request){
        $rules=[
            'oldpass'=> 'required',
            'newpass' => 'required|min:8',
            'repass' => 'required|min:8|same:newpass',
        ];
        $request->validate($rules);
        $changePass = Auth::user();
        if(Hash::check($request->oldpass,Auth::user()->password)){
            $changePass->password = Hash::make($request->newpass);
            $changePass->update();

            $notification = array(
                'msg' =>'Password Updated',
                'alert-type' =>'success',
            );
            return redirect()->back()->with($notification);
        }
        else{
            $notification = array(
                'msg' =>'Password not Updated',
                'alert-type' =>'danger',
            );
            return redirect()->back()->with($notification);
        }
    }
    public function socials(){
        $social_data = Social::where('id','1')->first();
        return view('backend.pages.socials',compact('social_data'));
    }
    public function updateSocials(Request $request){
        $social = Social::where('id', '1')->first();

        $social->facebook = $request->facebook;
        $social->Twitter = $request->Twitter;
        $social->linkedin = $request->linkedin;
        $social->instagram = $request->instagram;
        $social->youtube = $request->youtube;
        $social->researchgate = $request->researchgate;
        $social->googlescholar = $request->googlescholar;
        $social->reddit = $request->reddit;
        $social->Medium = $request->Medium;
        $social->pinterest = $request->pinterest;

        $social->update();

        $notification = array(
            'msg' =>'Social Updated',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);

    }
}
