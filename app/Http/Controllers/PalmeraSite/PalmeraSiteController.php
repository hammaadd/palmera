<?php

namespace App\Http\Controllers\PalmeraSite;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\shortquote;

class PalmeraSiteController extends Controller
{
    public function PalmeraMain()
    {
        
         $data =shortquote::where('key', 'aboutus')->get()->first();
        
        return view('PalmeraSite/content/homepage',compact('data'));
    }
}
