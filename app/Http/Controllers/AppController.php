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

   public function delete($table, $id){
      $param = array('is_deleted' => 1);
      DB::table($table)->where('id', $id)->update($param);      
      return redirect()->back()->withStatus("record deleted successfully");
   }
}
