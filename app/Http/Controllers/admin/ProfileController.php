<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profileSetting(){
        $messages="";
     
        return view('admin/content/adminprofile',compact('messages'));

    }
    public function update_password(Request $request){
        $validated = $request->validate([
            'currentpassword' => 'required',
            'newpassword' => 'required|min:8|different:password',
            'newpassword' => 'required|min:8|same:newpassword'
            ]);
            
        $old_password=$request->currentpassword;
        $new_password=$request->newpassword;
        $confirm_password=$request->confirmpassword;
        $hashedPassword=Auth::user()->password;
        $message="";
        if (Hash::check($old_password, $hashedPassword)) {
            
                $new_password=Hash::make($new_password);
                User::where('id',Auth::user()->id)->update(['password' => $new_password]);
                $messages="Password changed";
                //return view('admin/content/adminprofile',compact('messages'));
        }
        else {
            $messages="";
            //return view('admin/content/adminprofile',compact('messages'));
        }

        return back();
        

    }
    public function update_profile(Request $request){
        $validated = $request->validate([
            'uname' => 'required',
            'mail'=>'required',
            ]);
            User::where('id',Auth::user()->id)->update(['name' => $request->uname,'email'=>$request->mail]);

            return back();

    }
}
