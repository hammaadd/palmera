<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }
   function index(){
        
       return view('admin/content/dashboard');
   }
}
