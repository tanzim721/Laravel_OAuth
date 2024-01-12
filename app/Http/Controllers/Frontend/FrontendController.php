<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Mail;
use Str;
use Auth; 

class FrontendController extends Controller
{
    public function home(){
       
        return view('frontend.home1');
    }
    
  
    
}
