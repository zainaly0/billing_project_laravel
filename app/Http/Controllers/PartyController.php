<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use Illuminate\Support\Facades\DB;

class PartyController extends Controller
{
   public function index()
   {
      return view('party.index');
   }

   public function addParty()
   {
      return view('party.add');
   }
}
