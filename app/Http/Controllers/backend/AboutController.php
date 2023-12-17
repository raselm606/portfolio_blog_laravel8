<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Education;
use App\Models\Internship;
use App\Models\Publication;
use App\Models\Workshop;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $about_data = About::where('id','1')->first();
        return view('backend.pages.about',compact('about_data'));

    }
    public function aboutUpdate(Request $request){
        $about = About::where('id', '1')->first();

        $about->title = $request->title;
        $about->details = $request->details;

        //upload cv
        if ($request->hasFile('cv')) {
            $file = $request->file('cv');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'cv' . '.' . $ext;
            $file->move('public/asset/upload/aboutme', $filename);
            $about->cv = $filename;
        }
        //upload myphoto
        if ($request->hasFile('myphoto')) {
            $file = $request->file('myphoto');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'myphoto' . '.' . $ext;
            $file->move('public/asset/upload/aboutme', $filename);
            $about->myphoto = $filename;
        }
        $about->experience = $request->experience;
        $about->name = $request->name;
        $about->mobile = $request->mobile;
        $about->email = $request->email;
        $about->publication = $request->publication;
        $about->english = $request->english;
        $about->german = $request->german;
        $about->laboratory = $request->laboratory;
        $about->membership = $request->membership;

        $about->update();

        $notification = array(
            'msg' =>'About info Updated',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);
    }
    public function education(){
        $education = Education::orderBy('id','desc')->get();
        return view('backend.pages.education',compact('education'));

    }
    public function eduStore(Request $request){
        $rules = [
            'title' => 'required',
            'inistitute' => 'required',
        ];
        $request->validate($rules);

        $education = new Education();

        $education->title = $request->title;
        $education->inistitute = $request->inistitute;
        $education->date = $request->date;
        $education->status = $request->input('status')== TRUE ? '1':'0';

        $education->save();

        $notification = array(
            'msg' =>'Education Added Successfully',
            'alert-type' =>'success',
        );
        return redirect()->route('admin.education')->with($notification);
    }
    public function eduUpdate(Request $request, $id){
        $education = Education::find($id);

        $rules = [
            'title' => 'required',
            'inistitute' => 'required',
        ];
        $request->validate($rules);

        $education->title = $request->title;
        $education->inistitute = $request->inistitute;
        $education->date = $request->date;
        $education->status = $request->input('status')== TRUE ? '1':'0';

        $education->update();

        $notification = array(
            'msg' =>'Education Updated Successfully',
            'alert-type' =>'success',
        );
        return redirect()->route('admin.education')->with($notification);

    }
    public function eduDelete($id){
        $education = Education::find($id);
        $education->delete();
        $notification = array(
            'msg' =>'Education deleted',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);
    }
    public function intern(){
        $internship = Internship::orderBy('id','desc')->get();
        return view('backend.pages.internship',compact('internship'));

    }
    public function internStoore(Request $request){
        $rules=[
            'date' => 'required',
            'designation' => 'required',
        ];
        $request->validate($rules);

        $internship = new Internship();
        $internship->date = $request->date;
        $internship->designation = $request->designation;
        $internship->inistitute = $request->inistitute;
        $internship->details = $request->details;
        $internship->status = $request->input('status') == TRUE ? '1':'0';

        $internship->save();

        $notification = array(
            'msg' =>'Intership/ Research Added Successfully',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);
    }
    public function internnUpdate(Request $request, $id){
        $internship = Internship::find($id);

        $rules=[
            'date' => 'required',
            'designation' => 'required',
        ];
        $request->validate($rules);

        $internship->date = $request->date;
        $internship->designation = $request->designation;
        $internship->inistitute = $request->inistitute;
        $internship->details = $request->details;

        $internship->status = $request->input('status') == TRUE ? '1':'0';

        $internship->update();

        $notification = array(
            'msg' =>'Internship Updated Successfully',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);
    }
    public function internDelete($id){
        $internship = Internship::find($id);
        $internship->delete();
        $notification = array(
            'msg' =>'Internship deleted ',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);

    }
    public function workshop(){
        $workshop = Workshop::orderBy('id','desc')->get();
        return view('backend.pages.workshop',compact('workshop'));

    }
    public function workshopStore(Request $request){
        $rules=[
            'date' => 'required',
            'designation' => 'required',
        ];
        $request->validate($rules);

        $workshop = new Workshop();
        $workshop->date = $request->date;
        $workshop->designation = $request->designation;
        $workshop->inistitute = $request->inistitute;
        $workshop->status = $request->input('status') == TRUE ? '1':'0';

        $workshop->save();

        $notification = array(
            'msg' =>'Workshop Added Successfully',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);
    }
    public function workshopUpdate(Request $request, $id){
        $workshop = Workshop::find($id);

        $rules=[
            'date' => 'required',
            'designation' => 'required',
        ];
        $request->validate($rules);

        $workshop->date = $request->date;
        $workshop->designation = $request->designation;
        $workshop->inistitute = $request->inistitute;

        $workshop->status = $request->input('status') == TRUE ? '1':'0';

        $workshop->update();

        $notification = array(
            'msg' =>'Workshop Updated Successfully',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);

    }
    public function workshopDelete($id){
        $workshop = Workshop::find($id);
        $workshop->delete();

        $notification = array(
            'msg' =>'Workshop deleted ',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);
    }
    public function publication(){
        $publication = Publication::orderBy('id','desc')->get();
        return view('backend.pages.publication',compact('publication'));

    }
    public function publicationStore(Request $request){
        $rules=[
            'name' => 'required',
        ];
        $request->validate($rules);

        $publication = new Publication();
        $publication->name = $request->name;
        $publication->details = $request->details;
        $publication->status = $request->input('status') == TRUE ? '1':'0';

        $publication->save();
        $notification = array(
            'msg' =>'Publication Added Successfully',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);
    }
    public function publicationUpdate(Request $request, $id){
        $publication = Publication::find($id);

        $rules=[
            'name' => 'required',
        ];
        $request->validate($rules);

        $publication->name = $request->name;
        $publication->details = $request->details;
        $publication->status = $request->input('status') == TRUE ? '1':'0';
        $publication->update();

        $notification = array(
            'msg' =>'Publication Updated Successfully',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);
    }
    public function publicationDelete($id){
        $publication = Publication::find($id);
        $publication->delete();

        $notification = array(
            'msg' =>'Publication deleted ',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);
    }
}
