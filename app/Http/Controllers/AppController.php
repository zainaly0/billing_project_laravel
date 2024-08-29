<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
   public function dashboard()
   {
      return view('dashboard');
   }


   public function welcome()
   {
      return view('welcome');
   }


   public function about()
   {
      return view('about');
   }
}
