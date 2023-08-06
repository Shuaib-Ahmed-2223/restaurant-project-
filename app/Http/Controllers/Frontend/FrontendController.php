<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
       
       return view('frontend.home.index');
  
   }

   public function redirect()
   {
      $usertype= Auth::user()->usertype;
      if ($usertype=='1')
    {  return view('backend.master');
    }
   else{
    return view('frontend.home.index');
   }
  }

   
}
