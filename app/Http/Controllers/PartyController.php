<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PartyController extends Controller
{
   public function index()
   {

      $parties = Party::all();
      return view('party.index', compact('parties'));
   }

   public function addParty()
   {
      return view('party.add');
   }

   public function createParty(Request $req)
   {

      // validation

      $req->validate([
         'party_name' => 'required',
         'full_name' => 'required|string|min:2|max:20',
         'phone_no'=> 'required|numeric|min:10|max:10',
         'address' => 'required|max:255',

         "account_holder_name" => 'required|string|min:2|max:20',
         "account_no" => 'required|numeric|max:30',
         "bank_name" => 'required|max:255',
         'ifsc_code' => 'required|max:50',
         'branch_address' => 'required|max:255'
      ]);
      $params = $req->all();


      Party::create($params);
      return redirect()->route('addparty')->withStatus("party created successfully");
   }
}
