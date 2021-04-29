<?php

namespace App\Http\Controllers\PalmeraSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\shortquote;
class OurProductController extends Controller
{
    public function ProductView(){
        $data=Product::all();
        $aboutproduct=shortquote::where('key', 'aboutproducts')->get()->first();
        return view('PalmeraSite/content/our_product',compact('data','aboutproduct'));
    }
}
