<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\File;
use GuzzleHttp\Handler\Proxy;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function product(){
        $data=Product::all();
        return view('admin/content/product',compact('data'));
    }
    public function add_product(Request $request){
        $validated = $request->validate([
            'productname' => 'required',
            'description' => 'required',
            'img'=>'required',

        ]);

        $newImagename=$request->file('img');
        $newImagename=str_replace(' ','',time().'-'.$newImagename->getClientOriginalName());
        $request->img->move(public_path("product"),$newImagename);
        $table=new Product;
        $table->image=$newImagename;
        $table->productname=$request->productname;
        $table->description=$request->description;
        $table->save();
        return redirect()->route('products');


    }
 public function edit_product(Request $request, Product $product)
    {
        return view('admin/content/editproduct',compact('product'));
    }
    public function update_product(Request $request,$image){
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
           

        ]);
        if ($request->hasFile('img')) {
            $newImagename=$request->file('img');
            $newImagename=str_replace(' ','',time().'-'.$newImagename->getClientOriginalName());
            $request->img->move(public_path("product"),$newImagename);
            File::delete(public_path('product/'.$image));
            Product::where('id', $request->id)->update(['productname' => $request->name,"description"=>$request->description,"image"=>$newImagename]);
            return redirect()->route('products');
        }
        else{
            Product::where('id', $request->id)->update(['productname' => $request->name,"description"=>$request->description,]);
            return redirect()->route('products');
        }
    }
    public  function delete_product($id)
    {
        $del=Product::find($id);
        $del->delete();
        return redirect()->route('products');
    }
}
