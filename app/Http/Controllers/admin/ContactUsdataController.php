<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactUsdataController extends Controller
{
    public function contactus_data(){
        $data=Contactus::all();
        return view('admin/content/contactus_data',compact('data'));
    }
}
