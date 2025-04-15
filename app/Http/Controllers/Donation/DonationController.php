<?php

namespace App\Http\Controllers\Donation;

use App\Http\Controllers\Controller;
use App\Models\Donation\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DonationController extends Controller
{
    //
    public function addDonations(Request $request)
    {
        $donate = Donation::create([
            
            "campID" => $request->campID,
            "date" => $request->date,
            "nic" => $request->nic,
            "btype" => $request->btype,
            "amount" => $request->amount,
            "expdate" => $request->expdate,
            "storelocation" => $request->storelocation,
            
        ]);
        if($donate){
            return view("inventory.home")->with(['success' => 'Registered successfully!']);
        }
    }

    // public function search()
    // {
    //     $donate = Donation::all();
    //     return view('hospital.search',compact('staffs'));
    // }

}
