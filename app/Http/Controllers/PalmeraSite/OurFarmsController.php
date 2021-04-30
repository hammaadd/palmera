<?php

namespace App\Http\Controllers\PalmeraSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
class OurFarmsController extends Controller
{
 public function our_farms()
    {
        $data=Product::all();
       return view('PalmeraSite/content/ourfarms',compact('data'));
    }
}
