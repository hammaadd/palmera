<?php

namespace App\Http\Controllers\PalmeraSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactus;

class ContactUsController extends Controller
{
    public function contactus(){
        return view('PalmeraSite/content/contact_us');
    }
    public function submit_contact_form(Request $request){
        $validated = $request->validate([
            'username' => 'required',
            'mail' => 'required',
            'message'=>'required',

        ]);
        $table=new Contactus;
        $table->name=$request->username;
        $table->email=$request->mail;
        $table->message=$request->message;
        $table->save();
        return redirect()->route('contact.us');

    }
    
}
