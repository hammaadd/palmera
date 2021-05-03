<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\newslater;

class NewslaterDataController extends Controller
{
    public function newslater_data(){
        $data=newslater::all();
        return view('admin/content/newslaterdata',compact('data'));
    }
}
