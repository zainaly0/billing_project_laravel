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

      // $parties = Party::all();

      $parties = Party::select('id', 'party_name', "full_name", 'phone_no', "address", "account_holder_name", "account_no", "bank_name", "ifsc_code", "branch_address", "created_At");

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
         'phone_no' => 'required',
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

   public function editparty($party_id)
   {

      $data['party'] = Party::find($party_id);
      // dd($party_id);
      return view('party.edit', $data);
   }

   public function updateParty(Request $request, $id){
      $request->validate([
         'party_name' => 'required',
         'full_name' => 'required|string|min:2|max:20',
         'phone_no' => 'required',
         'address' => 'required|max:255',

         "account_holder_name" => 'required|string|min:2|max:20',
         "account_no" => 'required|numeric|max:30',
         "bank_name" => 'required|max:255',
         'ifsc_code' => 'required|max:50',
         'branch_address' => 'required|max:255'
      ]);
      $params = $request->all();
      Party::where('id', $id)->update($params);
      return redirect()->route('manage-parties')->withStatus('party updateed succesfully');


   }
}
