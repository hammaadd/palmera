<?php

namespace App\Http\Controllers\PalmeraSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\newslater;

class NewsLaterController extends Controller
{
 public function addnewslater(Request $request)
    {
        $validated = $request->validate([
            
            'mail' => 'required',
        ]);
        $table=new newslater;
        $table->mail=$request->mail;
        $table->save();
        return redirect()->route('palmera.home');

    }
}
