<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $message = Contact::orderBy('id','desc')->get();
        return view('backend.pages.message.index',compact('message'));
    }
    public function status(Request $request){

    }
    public function destroy($id){
        $message = Contact::find($id);

        $message->delete();

            $notification = array(
                'msg' =>'Message Deleted',
                'alert-type' =>'success',
            );

        return redirect()->route('admin.all.contact')->with($notification);
    }
}
