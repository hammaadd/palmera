<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\shortquote;

class ShortquoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function shortquote(){
        $data=shortquote::all();
        return view('admin/content/shortquote',compact("data"));
    }
    public function addquote(Request $request){
        $validated = $request->validate([
            'quote' => 'required',
            'key' => 'required|unique:shortquotes',
        ]);
        
    
        $key = str_replace(' ', '', $request->key);
        $key=str_replace(' ', '-', $key);
        $key=preg_replace('/[^A-Za-z0-9\-]/', '', $key);
        $table=new shortquote;
        $table->key=$key;
        $table->content=$request->quote;
        $table->save();
        return redirect()->route('short.quote');
    
       
        
      
    }
    public function editquote(Request $request, shortquote $shortQ){
        return view('admin/content/editshortquote',compact('shortQ'));
    }
    public function updatequote(Request $request){
        
        shortquote::where('id', $request->id)->update(['key' => $request->keys,"content"=>$request->quote]);
        return redirect()->route('short.quote');

        

    }
    public function deletequote($id){
        $del=shortquote::find($id);
        $del->delete();
        return redirect()->route('short.quote');
    }
}
